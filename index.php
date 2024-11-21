<?php
session_start();
include"koneksi.php";
if(!isset($_SESSION['iduser'])){
  include"login.php";
}else{
  $sql = "SELECT * FROM tb_user";
$stmt = $conn->prepare($sql);

$stmt->execute();
$resultuser = $stmt->fetch();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashbord</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/apl-antrianRS">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=antrian">Data Antrian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="?page=tambahantrian">Tambah Antrian</a>
        </li>
        </li>
      </ul>
    </div>
  </nav>
</div>
	<?php

		$page = isset($_GET['page'])?$_GET['page']:null;
		if (isset($page)) {
		 
		 if ($page=='antrian') { 
		 	include"daftar_antrian.php";
     }

     if ($page=='tambahantrian') { 
      include"tambah_antrian.php";
    }
    if ($page=='keluar') { 
      include"keluar.php";
    }

		 
		 	}else{
		 		include"default.php";
		 	} 	
	 ?>
  

</body>
</html>
<?php
}
?>