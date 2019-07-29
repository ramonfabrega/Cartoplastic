import javax.swing.*;
import java.io.*;
import java.nio.file.Files;
import java.nio.file.StandardCopyOption;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;
import java.util.Scanner;

public class FiscalDevol {

    public static void main (String[] args) throws FileNotFoundException {

        Scanner configs;

        if (System.getProperty("os.name").contains("Mac"))
            configs = new Scanner(new File("/Users/ramon/Desktop/temp/configs.txt"));
        else
            configs = new Scanner(new File("F:\\INFISY\\FILES\\EDI\\Fiscal\\Config\\configs.txt"));

//        Scanner configs = new Scanner(new File("F:\\INFISY\\FILES\\EDI\\Fiscal\\Config\\configs.txt"));
//        Scanner configs = new Scanner(new File("/Users/ramon/Desktop/temp/configs.txt"));
        String folderCSV = configs.nextLine();
        String folderProcessed = configs.nextLine();
        String folderUpload = configs.nextLine();

        configs.close();

        File folder = new File(folderCSV);
        File[] allFiles = folder.listFiles(new FilenameFilter() {
            public boolean accept(File dir, String name) {
                return name.matches("NC(.*).csv");
            }
        });
        int fileCount = 0;

        for (File file : allFiles){
            System.out.println("found file: " + file.getName());
            Scanner fileScanner = new Scanner(file);                //scanner of each file
            Map<String, ArrayList<String>> data = new HashMap<String, ArrayList<String>>();

            while(fileScanner.hasNextLine()){                       //HashMap population
                String line = fileScanner.nextLine();
                if(!line.equals("")){
                    line = line.replace("\"","");
                    Scanner lineScanner = new Scanner(line).useDelimiter(",");
                    String id = lineScanner.next();            // *** FIRST VALUE
                    if (id.equals("1") || id.equals("2")){
                        id = lineScanner.next();               // *** SECOND VALUE
                    } else {
                        id = id.replace("TI", "MV");
                    }

                    System.out.println("id: " + id);

                    ArrayList<String> values = new ArrayList<String>();

                    if(data.containsKey(id))
                        values = data.get(id);

                    values.add(line);
                    data.put(id, values);
                }
            }

            for (Map.Entry<String, ArrayList<String>> entry : data.entrySet()){    //HashMap looping
                String id = entry.getKey();
                ArrayList<String> lines = entry.getValue();
                StringBuilder output = new StringBuilder();                        //individual output file

                if(!id.equals("")){
                    lines.forEach(line -> output.append(line + "\n"));

                    try (PrintWriter out = new PrintWriter(folderUpload + id + ".txt")) {
                        out.print(output.toString());
                    }
                }
            }

            fileCount += data.size();
            file.renameTo(new File(folderProcessed + file.getName()));
            try{
                Files.move(new File(folderCSV + file.getName()).toPath(), new File(folderProcessed + file.getName()).toPath(), StandardCopyOption.REPLACE_EXISTING);
            }catch (IOException e){
            }
        }

        infoBox("Devoluciones procesadas: " + fileCount/2, "Fiscal Devolucion");

    }

    public static void infoBox(String infoMessage, String titleBar){
        JOptionPane.showMessageDialog(null, infoMessage, titleBar, JOptionPane.INFORMATION_MESSAGE);
        System.exit(0);
    }
}
