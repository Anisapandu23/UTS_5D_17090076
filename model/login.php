<?php
session_start();
include('connection.php');
include('function.php');
include ('./conf.php');
error_reporting(0);
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  $sql ="SELECT email,password,nama FROM user WHERE email=:email and password=:password";
  $query= $conn -> prepare($sql);
  $query-> bindParam(':email', $email, PDO::PARAM_STR);
  $query-> bindParam(':password', $password, PDO::PARAM_STR);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  if($query->rowCount() > 0)
  {
    $_SESSION['userlogin']=$_POST['email'];
    foreach ($results as $res){
    $_SESSION['nama']=$res->nama;
    }
    $currentpage=$_SERVER['REQUEST_URI'];
    $string = preg_replace('/\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|$!:,.;]*[A-Z0-9+&@#\/%=~_|$]/i', '', $string);
    $base_url=base_url();
    header('Location: '.$string.$base_url.'?travel=dashboard');
  } else{
    
  }
}
?>