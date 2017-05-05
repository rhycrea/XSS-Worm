import java.io.BufferedReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.ServerSocket;
import java.net.Socket;
import java.util.LinkedList;
import java.util.List;

public class Main {
    public static void main(String argv[]) throws IOException {
        
        ServerSocket server = new ServerSocket(8089);
        int i = 0;

        while (true) {
            i++;
            Socket newsocket = server.accept();
            System.out.println(i + " Gotcha!");

            BufferedReader br = new BufferedReader(new InputStreamReader(newsocket.getInputStream()));
            FileWriter wr = new FileWriter("cookies.txt",true);
            String input;
            List<String> headers = new LinkedList<String>(); // add header message to headers list
            StringBuilder sb = null;

            while ((input = br.readLine()) != null) {

                if (input.isEmpty() && sb == null) { // if input is empty then we reach a sb part of message
                    sb = new StringBuilder();
                    continue;
                }
                if (sb != null) {
                    sb.append(input).append('\n');
                }
                else {
                    headers.add(input);
                }
            }
            wr.write(sb != null ? sb.toString() : "" );
            wr.close();
        }
    }
}