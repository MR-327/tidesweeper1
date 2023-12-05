<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['content']; 
 
 $conn = new mysqli('localhost', 'root', '', 'test');
 if($conn->connect_error){
    die('connection Failed:'. $conn->connect_error);
 } else {
    $stmt = $conn->prepare("insert into registration(Name, Email, Message)
       values(?,?,?)");
    $stmt->bind_param("sss", $name, $email, $message); 
    $stmt->execute();
    echo "Message Sent Successfully...";
    $stmt->close();
    $conn->close();
 } 
?>
