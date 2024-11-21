<h2>Login Disini</h2>
<!DOCTYPE html>
<html>
<head>
	<title>Dashbord</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style type="text/css">
	form{
      width: 500px;
      margin-left: 450px;
      margin-top:50px;
   }
 button{
   width: 500px;
 }
 h2{
  padding-top : 30px;
    text-align: center;
    color : #333;
    font-weight: bold ;
    font-style: serif;
}
</style>

<body>
<form method="POST">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit"  name="btn" class="btn btn-primary">Submit</button>
</form>
<?php
if(isset($_POST['btn'])){
  $email = $_POST['email'];
  $password = $_POST['pswd'];
  $sqluser = "SELECT*FROM tb_user WHERE email=:username AND password=:password";
  $stmt = $conn->prepare($sqluser);
  $stmt->bindParam(':username', $email);
  $stmt->bindParam(':password', $password); 
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  $row = $stmt->rowCount();
  if ($row>0){
    $_SESSION['iduser'] = $result['id'];
    header('location:index.php');
  }else{
   echo 'gagal';
  }

}
?>
</body>
</html>