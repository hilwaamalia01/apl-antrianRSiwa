<?php
include 'koneksi.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_antrian WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindparam(':id', $id, PDO::PARAM_INT);
    if ($stmt->execute()){
        echo "Data antrian berhasil di hapus";
    }else{
        echo "Error: " .$conn->error;
    }
}
$conn = null;
?>