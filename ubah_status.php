<?php
include 'koneksi.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "UPDATE tb_antrian SET status = 'Selesai' WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindparam(':id', $id, PDO::PARAM_INT);
    if ($stmt->execute()){
        echo "Status pasien berhasil diubah menjadi selesai!";
    }else{
        echo "Error: Gagal mengubah status.";
    }
}
$conn = null;
?>