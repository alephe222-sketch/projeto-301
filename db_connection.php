<?php
$servername = "localhost";
$usarname = "root";
$password = "";
$dbname = "todo_list_db";
$conn = new mysqli($servername, $usarname, $password, $dbname);
if ($conn->connect_error) {
    die("Erro na conexão:" . $conn -> connect_error);
}
?>

