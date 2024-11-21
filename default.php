<div class="container-fluid p-5  text-white text-center" style="background-color: #4A628A;">
  <h1>Dashbord</h1>
  <p>Selamat Datang <?=$resultuser['name'] ?></p>

</div>
  
<div class="container mt-16 p-5">
  <div class="row">
    <div class="col-sm-6">
      <h3>Data Antrian</h3>
      <div  style="width:300px;">
      	<a href="?page=antrian"><img class="card-img-top" src="images/gg.jpg" alt="card image"></a>
    </div>
</div>
    <div class="col-sm-6">
      <h3>Tambah Antrian</h3>
      <div  style="width:300px;">
      	<a href="?page=tambahantrian"><img class="card-img-top" src="images/jj.jpg" alt="card image"></a>
    </div>
</div>
<center><a href="?page=keluar" class="btn btn-danger" style="margin-top: 100px;">keluar</a></center>