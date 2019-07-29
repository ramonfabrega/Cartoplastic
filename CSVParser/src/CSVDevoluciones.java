import java.io.File;
import java.io.FileNotFoundException;
import java.io.FilenameFilter;
import java.io.PrintWriter;
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Scanner;
import javax.swing.JOptionPane;

public class CSVDevoluciones {

	private static int FIXED_WIDTH_SIZE = 4636;
	
	public static void main (String[] args) throws FileNotFoundException{
	
//		Scanner configs = new Scanner(new File("F:\\INFISY\\FILES\\EDI\\UbiquaImport\\Config\\configs.txt"));
		Scanner configs = new Scanner(new File("/Users/ramon/Desktop/temp/configs.txt"));
		String folderCSV = configs.nextLine();
		String folderProcessed = configs.nextLine();
		String folderUpload = configs.nextLine();
		configs.close();
	
		File folder = new File(folderCSV);
		File[] devol = folder.listFiles(new FilenameFilter(){
			public boolean accept(File dir, String name){
				return name.matches("devolucion-(.*)");
			}
		});
		
		int fileNumber = devol.length > 0 ? Integer.parseInt(devol[0].getName().replaceAll("[\\D]", "")) : 0;
		
		StringBuilder output = new StringBuilder();
		
		for (int i = 0; i < devol.length; i++){
			Scanner devolScanner = new Scanner(devol[i]);
			devolScanner.nextLine();
			while(devolScanner.hasNextLine()){
				Scanner lineScanner = new Scanner(devolScanner.nextLine()).useDelimiter(",");	
				String codigo = lineScanner.next();
				if(codigo.length() == 0)
					break;
				String codigo_cliente = codigo.substring(0, 6);
				String codigo_ubicacion = "";
				if(codigo.length() > 6)
					codigo_ubicacion = codigo.substring(7);
	
				String linea_unpadded = lineScanner.next();
				String linea_padded = "000".substring(("" + linea_unpadded).length()) + linea_unpadded;
				
				String producto = lineScanner.next();
				
				String cantidad_unpadded = lineScanner.next() + "0000";
				String cantidad_padded = "0000000000000".substring(cantidad_unpadded.length()) + cantidad_unpadded;
				String razon = lineScanner.next();
				
				String result = lineMaker(codigo_cliente, codigo_ubicacion, linea_padded, producto, cantidad_padded, razon);
				
				output.append(result);
				output.append("\n");
				
				lineScanner.close();
			}
			
			devolScanner.close();
			
			try{
				devol[i].renameTo(new File(folderProcessed + devol[i].getName()));
			}catch(Exception e){
				e.printStackTrace();
			}
		}
		if(fileNumber > 0)
			try(PrintWriter out = new PrintWriter(folderUpload + "devolucion-" + fileNumber + "-procesado.txt")){
			    out.print(output.toString());
			}
		infoBox("Devoluciones procesadas: " + devol.length, "Devoluciones");
		
	}
	
	private static String lineMaker(String codigo_cliente, String codigo_ubicacion, String linea, String codigo_producto, String cantidad, String razon){
		StringBuilder result = new StringBuilder();
		for (int i = 0; i < FIXED_WIDTH_SIZE; i++){
			result.append(" ");
		}
		
		String date = getDate();
		
		result.replace(0, 1, "O");
		result.replace(1, 7, codigo_cliente);
		result.replace(27, 35, date);
		if(codigo_ubicacion.length() > 0)
			result.replace(548, 554, codigo_ubicacion);
		result.replace(701, 704, linea);
		result.replace(705, 718, cantidad);
		result.replace(730, 740, codigo_producto);
		result.replace(859, 867, date);
		result.replace(1352, 1353, "1");
		result.replace(867, 867 + razon.length(), razon);
		
		return result.toString();
	}
	
	private static void infoBox(String infoMessage, String titleBar){
        JOptionPane.showMessageDialog(null, infoMessage, titleBar, JOptionPane.INFORMATION_MESSAGE);
    }
	
	private static String getDate(){
		Calendar c = Calendar.getInstance();
		String date = new SimpleDateFormat("yyyyMMdd").format(c.getTime());
		return date;
	}
	
}
