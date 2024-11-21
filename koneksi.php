<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "rumahsakit";
try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo"Berhasil";
}catch(PDOException $e){
    echo"Gagal Terkoneksi".$e->getMessage();
}
?>