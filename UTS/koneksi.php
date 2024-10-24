<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";
$port = 3306;

//AKTIFKAN MODE EXCEPTION UNTUK MYSQL
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//CREATE CONNECTION
try {
    $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
} catch (mysqli_sql_exception $error) {
    echo "koneksin gagal: ". $error->getMessage();
}
?>