# Java Networking

Java provides robust networking capabilities that allow you to develop applications that communicate over a network. Whether you need to build client-server applications, implement network protocols, or interact with web services, Java networking APIs can help you accomplish these tasks. In this tutorial, we'll explore the basics of Java networking.

## Socket Programming

Socket programming is the foundation of network communication in Java. Sockets provide the means for two applications to establish a network connection and exchange data. The `java.net` package contains classes for socket programming, including `Socket` and `ServerSocket`.

### TCP Socket Programming

TCP (Transmission Control Protocol) is a reliable, connection-oriented protocol. To establish a TCP connection, a server application listens on a specific port, and a client application connects to that port. Here's an example of a TCP client and server in Java:

```java
// TCP Server
import java.io.*;
import java.net.*;

ServerSocket serverSocket = new ServerSocket(1234); // Create a server socket

Socket clientSocket = serverSocket.accept(); // Wait for a client connection
InputStream inputStream = clientSocket.getInputStream();
OutputStream outputStream = clientSocket.getOutputStream();

// Read and write data from/to the client
DataInputStream dataInputStream = new DataInputStream(inputStream);
DataOutputStream dataOutputStream = new DataOutputStream(outputStream);

String clientMessage = dataInputStream.readUTF(); // Read client data
System.out.println("Received from client: " + clientMessage);

String serverMessage = "Hello, client!";
dataOutputStream.writeUTF(serverMessage); // Send data to the client

// Close the connection
clientSocket.close();
serverSocket.close();
```

```java
// TCP Client
import java.io.*;
import java.net.*;

Socket clientSocket = new Socket("localhost", 1234); // Connect to the server

InputStream inputStream = clientSocket.getInputStream();
OutputStream outputStream = clientSocket.getOutputStream();

// Read and write data from/to the server
DataInputStream dataInputStream = new DataInputStream(inputStream);
DataOutputStream dataOutputStream = new DataOutputStream(outputStream);

String clientMessage = "Hello, server!";
dataOutputStream.writeUTF(clientMessage); // Send data to the server

String serverMessage = dataInputStream.readUTF(); // Read server data
System.out.println("Received from server: " + serverMessage);

// Close the connection
clientSocket.close();
```

In the above example, the server listens on port 1234 using a `ServerSocket`, while the client connects to the server using a `Socket`. Data is exchanged using `DataInputStream` and `DataOutputStream` for reading and writing UTF-8 encoded text.

