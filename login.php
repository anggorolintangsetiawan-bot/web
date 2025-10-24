<?php
include "koneksi.php";

?>
<h1>Halaman login</h1>
<form action="" method="post">
Username :<input type="text" name="username">
<br>
Password :<input type="text" name="password">
<br>
<button name="login">Login</button>
</form>
<?php
if(isset($_POST['login'])){
   // echo "proses";
   $username=$_POST['username'];
   $password=$_POST['password'];
   $query=mysqli_query($koneksi, "select * from user where username='$username' AND password='$password'");
   $cek = mysqli_num_rows($query);
   // echo $cek;
   if($cek>0){
    //berhasil login
    session_start();
    $_SESSION['status']="sukses";
    $_SESSION['username']=$_POST['username'];
    $_SESSION['password']=$_POST['password'];
    header('location:index.php');
   }
}

?>