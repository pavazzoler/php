<?php
$servername = "172.31.15.246";
$database = "adtsys";
$username = "root";
$password = "pa250285";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Nao Conectado com o Banco de Dados!" . mysqli_connect_error());
}
echo "Conectado com o Banco de Dados!!";
mysqli_close($conn);
?>
