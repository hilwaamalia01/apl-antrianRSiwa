<style>
html {
  height: 100%;
}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

</style>

<?php
include 'koneksi.php';
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $nama_pasien = $_POST['nama_pasien'];
    $nomor_antrian = $_POST['nomor_antrian'];
    $waktu_kedatangan = $_POST['waktu_kedatangan'];
    $sql = "INSERT INTO tb_antrian (nama_pasien, nomor_antrian, waktu_kedatangan) VALUES (:nama_pasien, :nomor_antrian, :waktu_kedatangan)";
    $stmt = $conn->prepare($sql);
    $stmt->bindparam(':nama_pasien', $nama_pasien);
    $stmt->bindparam(':nomor_antrian', $nomor_antrian);
    $stmt->bindparam(':waktu_kedatangan', $waktu_kedatangan);
    if ($stmt->execute()) {
        echo "Data antrian berhasil ditambahkan!";
    }else{
        echo "Error: Gagal menambahkan data.";
    }
}
?>

<div class="login-box">
  <h2>Tambah Data Antrian</h2>
  <form method="POST" action="tambah_antrian.php">
    <div class="user-box">
    <input type="text" name="nama_pasien" required>
      <label>Nama Pasien</label>
    </div>
    <div class="user-box">
    <input type="number" name="nomor_antrian" required>
      <label>Nomor Antrian</label>
    </div>
    <div class="user-box">
    <input type="datetime-local" name="waktu_kedatangan" required>
      <label>waktukedatangan</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>