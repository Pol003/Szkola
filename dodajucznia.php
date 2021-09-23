<?php
$im=$_POST['imie'];
$na=$_POST['nazwisko'];
$te=$_POST['telefon'];
$ad=$_POST['adres'];




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sklep";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO osoby1 (imie,nazwisko,pesel)
VALUES ('$im','$na','$te','$ad')";
if ($conn->query($sql) === TRUE) {
    echo "Dodano gościa ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>