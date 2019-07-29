import java.io.File;
import java.io.FileNotFoundException;
import java.io.FilenameFilter;
import java.io.PrintWriter;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Scanner;
import javax.swing.JOptionPane;

public class CSVParser {
	
	private static int FIXED_WIDTH_SIZE = 4636;

	public static void main (String[] args) throws FileNotFoundException{
		
//		Scanner configs = new Scanner(new File("F:\\INFISY\\FILES\\EDI\\UbiquaImport\\Config\\configs.txt"));
		Scanner configs = new Scanner(new File("/Users/ramon/Desktop/temp/configs.txt"));
		String folderCSV = configs.nextLine();
		String folderProcessed = configs.nextLine();
		String folderUpload = configs.nextLine();
		configs.close();
		
		File folder = new File(folderCSV);
		File[] headers = folder.listFiles(new FilenameFilter(){
			public boolean accept(File dir, String name){
				return name.matches("(.*)encabezado.csv");
			}
		});
		File[] details = folder.listFiles(new FilenameFilter(){
			public boolean accept(File dir, String name){
				return name.matches("(.*)detalles.csv");
			}
		});
		
		for (int i = 0; i < headers.length; i++){			
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
			if(codigo.length() > 6)
				codigo_ubicacion = codigo.substring(7);
			int lineCounter = 1;
			String date = getDate();
			
			while(detailScanner.hasNextLine()){
				Scanner detail = new Scanner(detailScanner.nextLine()).useDelimiter(",");

				String codigo_producto = detail.next();
				String cantidad_unpadded = detail.next() + "0000";
				String cantidad = "0000000000000".substring(cantidad_unpadded.length()) + cantidad_unpadded;
				String numero_linea = "000".substring(("" + lineCounter).length()) + lineCounter;
				
				lineCounter++;
				
				String line = lineMaker(codigo_cliente, codigo_ubicacion, num_pedido, numero_linea, cantidad, codigo_producto, date);
				output.append(line);
				output.append("\n");
				
				if(fileNumber > 0)
					try(PrintWriter out = new PrintWriter(folderUpload + "pedido-" + fileNumber + "-procesado.txt")){
					    out.print(output.toString());
					}
				
				detail.close();
			}			
			header.close();
			detailScanner.close();
			headerScanner.close();
			
			try{
				headers[i].renameTo(new File(folderProcessed + headers[i].getName()));
				details[i].renameTo(new File(folderProcessed + details[i].getName()));
			}catch(Exception e){
				e.printStackTrace();
			}
			
		}
		infoBox("Pedidos procesados: " + headers.length, "CSVParser");
	}
	
	public static void infoBox(String infoMessage, String titleBar){
        JOptionPane.showMessageDialog(null, infoMessage, titleBar, JOptionPane.INFORMATION_MESSAGE);
    }
	
	private static String getDate(){
		Calendar c = Calendar.getInstance();
		c.add(Calendar.DATE, 1);
		String date = new SimpleDateFormat("yyyyMMdd").format(c.getTime());
		return date;
	}
	
	
	private static String lineMaker(String codigo_cliente, String codigo_ubicacion, String num_pedido, String linea, String cantidad, String codigo_producto, String date){
		StringBuilder result = new StringBuilder();
		for (int i = 0; i < FIXED_WIDTH_SIZE; i++){
			result.append(" ");
		}
		
		result.replace(0, 1, "O");
		result.replace(1, 7, codigo_cliente);
		result.replace(27, 35, date);
		if(codigo_ubicacion.length() > 0)
			result.replace(548, 554, codigo_ubicacion);
		result.replace(73, 78, num_pedido);
		result.replace(701, 704, linea);
		result.replace(705, 718, cantidad);
		result.replace(730, 740, codigo_producto);
		result.replace(859, 867, date);

		return result.toString();
	}
}
