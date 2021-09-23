<?php

$te=$_POST['telefon'];





$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sklep";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}s
$sql = "DELETE FROM `osoby1` WHERE `pesel`='$pesel'";
if ($conn->query($sql) === TRUE) {
    echo "Usunięto gościa ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>