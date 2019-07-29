import javax.swing.*;
import java.awt.*;
import java.io.FileNotFoundException;

public class Main {

    private static JFrame gui;
    final static int GUI_WIDTH = 350, GUI_HEIGHT = 60;

    public static void main (String args[]) throws FileNotFoundException{
        Dimension screenSize = Toolkit.getDefaultToolkit().getScreenSize();
        final int gX = (int) (screenSize.getWidth() / 2 - GUI_WIDTH /2);
        final int gY = (int) (screenSize.getHeight() / 2) - (GUI_HEIGHT / 2);

        gui = new JFrame("Cartoplastic, S.A.");
        gui.setBounds(30, 30, GUI_WIDTH, GUI_HEIGHT);
        gui.setResizable(false);
        gui.setDefaultCloseOperation(WindowConstants.EXIT_ON_CLOSE);

        JPanel panel = new JPanel();
        gui.add(panel);

        JButton pedidos = new JButton("Pedidos");
        pedidos.addActionListener(e -> {
            try {
                CSVParser.main(null);
            } catch (FileNotFoundException e1) {
                e1.printStackTrace();
            }
        });
        panel.add(pedidos);

        JButton devoluciones = new JButton("Devoluciones");
        panel.add(devoluciones);


        JButton fiscal = new JButton("Fiscal");
        fiscal.addActionListener(e -> {
            try {
                Fiscal.main(null);
            } catch (FileNotFoundException e1) {
                e1.printStackTrace();
            }
        });
        panel.add(fiscal);

        gui.setVisible(true);

    }
}
