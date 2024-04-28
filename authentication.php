<?php
include("config.php");
if(isset($_POST["login"])){
    $user = $_POST['username'];
    $password = $_POST['pass'];

    $user = stripcslashes($user);
    $password = stripcslashes($password);

    $user = mysqli_real_escape_string($con, $user);
    $password = mysqli_real_escape_string($con, $password);

    $query = mysqli_query($con,"Select * from users where username = '$user' and password = '$password'");

    $rows = mysqli_num_rows($query);
    if($rows == 1){
      header("Location: Webpage1.php");
    } else{
      header("Location: index.php");
    }
    if(isset($_POST["remember"])){
      setcookie('username', $user, time()+60*60,'/');
      setcookie('password', $password, time()+60*60,'/');
      session_start();
      $_SESSION['username']=$user;
      header("Location: Webpage1.php");
    }
}
?>
