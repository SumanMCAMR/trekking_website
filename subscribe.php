<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mca"; // replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
$email=$_POST['email'];
$sql = "INSERT INTO logindata (username) VALUES ('$email')";
$result =$conn->query($sql);
echo "you're subscribed";
header("Location:index.php");
$conn->close();

?>