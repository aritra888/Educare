<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Database connection
session_start();
$conn = new mysqli('localhost', 'root', '', 'educare');
if($conn->connect_error){
    $_SESSION['status'] = "Opps!";
    $_SESSION['status_code'] = "error";
    header("Location: index.html");
    die('Connection Failed : ' . $conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into messages(name, email, message) values(?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);
    $stmt->execute();
    $_SESSION['status'] = "Success!";
    $_SESSION['status_code'] = "success";
    header("Location: index.html");
    $stmt->close();
    $conn->close();
}
?>
