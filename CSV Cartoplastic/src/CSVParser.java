import java.io.File;
import java.io.FileNotFoundException;
import java.io.FilenameFilter;
import java.io.PrintWriter;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Scanner;
import javax.swing.JOptionPane;

/*

		25	June 2019
			Header:
				* split num_pedido_clientes de detalles
					* ejemplo: #1231223# || # 7186312 #
					* nuevo campo en: 202 - 217
			Details:

		22	Agosto	2018
			Header:
			Details:
				* campo de producto ahora soporta taxable o no
					* ejemplo: CLICLO-0001-LL vs CLICLO-0001-LL-CN
					* nuevo campo en

		22	Enero	2018
			Header:
			Details:
				* campo de producto ahora soporta ubicacion
					* ejemplo: CICLO-0001 vs CICLO-0001-LL
					* 731 a 740 en GSS
					* nuevo campo en 769 - 770

 */

public class CSVParser {

	private static int FIXED_WIDTH_SIZE = 4636;

	public static void main(String[] args) throws FileNotFoundException {

		Scanner configs;

		if (System.getProperty("os.name").contains("Mac"))
			configs = new Scanner(new File("/Users/ramon/Desktop/temp/configs.txt"));
		else
			configs = new Scanner(new File("F:\\INFISY\\FILES\\EDI\\UbiquaImport\\Config\\configs.txt"));

		String folderCSV = configs.nextLine();
		String folderProcessed = configs.nextLine();
		String folderUpload = configs.nextLine();
		configs.close();

		File folder = new File(folderCSV);
		File[] headers = folder.listFiles(new FilenameFilter() {
			public boolean accept(File dir, String name) {
				return name.matches("(.*)encabezado.csv");
			}
		});
		File[] details = folder.listFiles(new FilenameFilter() {
			public boolean accept(File dir, String name) {
				return name.matches("(.*)detalles.csv");
			}
		});

		for (int i = 0; i < headers.length; i++) {
			Scanner headerScanner = new Scanner(headers[i]);
			Scanner detailScanner = new Scanner(details[i]);
			StringBuilder output = new StringBuilder();
			int fileNumber = headers.length > 0 ? Integer.parseInt(headers[i].getName().replaceAll("[\\D]", "")) : 0;
			headerScanner.nextLine();
			detailScanner.nextLine();
			Scanner header = new Scanner(headerScanner.nextLine()).useDelimiter(",");

			String num_pedido_unpadded = header.next();
			String num_pedido = "00000".substring(num_pedido_unpadded.length()) + num_pedido_unpadded;

			String codigo = header.next();
			String codigo_cliente = codigo.substring(0, 6);
			String codigo_ubicacion = "";
			if (codigo.length() > 6)
				codigo_ubicacion = codigo.substring(7);

			String codigo_vendedor = header.next();

			String detalles_unpadded = "";
			String num_pedido_cliente = "               ";
			if (header.hasNext()) {
				detalles_unpadded = header.next();
				if (detalles_unpadded.charAt(0) == '#') {
					num_pedido_cliente = (detalles_unpadded.substring(1, detalles_unpadded.indexOf('#', 1)).trim()
							+ num_pedido_cliente);
					num_pedido_cliente = num_pedido_cliente.substring(0, 15);
					detalles_unpadded = detalles_unpadded.substring(detalles_unpadded.indexOf('#', 1));
				}
			}
			String detalles_padding = "                                                                                            ";
			detalles_unpadded = detalles_unpadded + detalles_padding;
			String detalles = detalles_unpadded.substring(0, 90);

			int lineCounter = 1;
			String date = getDate();

			while (detailScanner.hasNextLine()) {
				Scanner detail = new Scanner(detailScanner.nextLine()).useDelimiter(",");

				String codigo_producto = detail.next();

				String producto_taxable = " ";

				String producto_ubicacion = codigo_producto.substring(11, 13);

				if (codigo_producto.length() > 14) {
					String codigo_taxable = codigo_producto.substring(14);
					if (codigo_taxable.equals("CN") || codigo_taxable.equals("CI") || codigo_taxable.equals("DR")) {
						producto_taxable = "T";
					} else {
						producto_taxable = "E";
					}
				}

				// elimina la ubicacion y taxable del codigo de producto
				codigo_producto = codigo_producto.substring(0, 10);

				String cantidad_unpadded = detail.next() + "0000";
				String cantidad = "0000000000000".substring(cantidad_unpadded.length()) + cantidad_unpadded;
				String numero_linea = "000".substring(("" + lineCounter).length()) + lineCounter;

				lineCounter++;

				String line = lineMaker(codigo_cliente, codigo_ubicacion, num_pedido, numero_linea, cantidad, codigo_producto,
						producto_ubicacion, producto_taxable, date, detalles, num_pedido_cliente);
				output.append(line);
				output.append("\n");

				if (fileNumber > 0)
					try (PrintWriter out = new PrintWriter(folderUpload + "pedido-" + fileNumber + "-procesado.txt")) {
						out.print(output.toString());
					}

				detail.close();
			}
			header.close();
			detailScanner.close();
			headerScanner.close();

			try {
				headers[i].renameTo(new File(folderProcessed + headers[i].getName()));
				details[i].renameTo(new File(folderProcessed + details[i].getName()));
			} catch (Exception e) {
				e.printStackTrace();
			}

		}
		infoBox("Pedidos procesados: " + headers.length, "CSVParser");
	}

	public static void infoBox(String infoMessage, String titleBar) {
		JOptionPane.showMessageDialog(null, infoMessage, titleBar, JOptionPane.INFORMATION_MESSAGE);
	}

	private static String getDate() {
		Calendar c = Calendar.getInstance();
		c.add(Calendar.DATE, 1);
		String date = new SimpleDateFormat("yyyyMMdd").format(c.getTime());
		return date;
	}

	private static String lineMaker(String codigo_cliente, String codigo_ubicacion, String num_pedido, String linea,
									String cantidad, String codigo_producto, String producto_ubicacion, String producto_taxable, String date,
									String detalles, String num_pedido_clientes) {
		StringBuilder result = new StringBuilder();
		for (int i = 0; i < FIXED_WIDTH_SIZE; i++) {
			result.append(" ");
		}

		result.replace(0, 1, "O");
		result.replace(1, 7, codigo_cliente);
		result.replace(27, 35, date);
		if (codigo_ubicacion.length() > 0)
			result.replace(548, 554, codigo_ubicacion);
		result.replace(73, 78, num_pedido);
		result.replace(701, 704, linea);
		result.replace(705, 718, cantidad);
		result.replace(730, 740, codigo_producto);
		result.replace(768, 770, producto_ubicacion);
		result.replace(1350, 1351, producto_taxable);
		result.replace(859, 867, date);
		String detalles1 = detalles.substring(0, 30);
		String detalles2 = detalles.substring(30, 60);
		String detalles3 = detalles.substring(60);
		result.replace(103, 133, detalles1);
		result.replace(133, 163, detalles2);
		result.replace(163, 193, detalles3);
		result.replace(202, 217, num_pedido_clientes);

		return result.toString();
	}
}
