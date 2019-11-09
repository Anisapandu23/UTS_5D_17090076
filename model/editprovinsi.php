<?php
//error_reporting(0);
session_start();
@require_once ('connection.php');
@require_once ('function.php');
error_reporting(0);
if(isset($_POST['edit']))
{
  $nama=$_POST['nama'];
  $id=$_POST['id'];
  $sql="UPDATE provinsi set `nama`=:nama WHERE `id`=:id";
  $query = $conn->prepare($sql);
  $query->bindParam(':nama',$nama,PDO::PARAM_STR);
  $query->bindParam(':id',$id,PDO::PARAM_STR);
  try {
   $query->execute();
   //do other things if successfully inserted
  }catch(PDOException $e){
   if ($e->errorInfo[1] == 1062) {
    echo "<script>alert('ID Sudah Digunakan');</script>";
    echo "<script>window.history.back(-1);</script>";
      // duplicate entry, do something else
   } else {
      // an error other than duplicate entry occurred
   }
  }
  $affected = $query->rowCount();
  if($affected>0)
  {
    echo "<script>alert('Edit Provinsi Suksess');</script>";
    $_SESSION['regist_success']='Edit Provinsi Berhasil !';
    echo "<script>window.location.assign('?travel=provinsi')</script>";
  }
  else 
  {
    echo "<script>alert('Sepertinya ada kesalahan!');</script>";
  }
}
?>