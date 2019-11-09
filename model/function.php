<?php

function redirect($location){
	header('Location: ?'.$location);
	die();
	exit();
}

function querydata($table,$column,$input){
	@require_once 'connection.php';
  $sql ="SELECT * FROM $table WHERE `$column`=:input";
  $query= $conn->prepare($sql);
  $query->bindParam(':input',$input,PDO::PARAM_STR);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  $data =$results;
  return $data;
}

function deletedata($table,$column,$input){
	@require_once 'connection.php';
  $sql ="DELETE FROM $table WHERE `$column`=:input";
  $query= $conn->prepare($sql);
  $query->bindParam(':input',$input,PDO::PARAM_STR);
  $query-> execute();

  $affected = $query->rowCount();
  if($affected>0)
  {
    echo "<script>alert('Hapus Suksess');</script>";
    $_SESSION['regist_success']='Hapus Berhasil !';
    echo "<script>window.location.assign('?travel=$table')</script>";
  }
  else 
  {
    echo "<script>alert('Sepertinya ada kesalahan!');</script>";
  }
}
$id=$_GET['idhapus'];
if(isset($_GET['idhapus'])){
	deletedata('provinsi','id',$id);
    echo "<script>window.location.assign('?travel=provinsi')</script>";
}
 ?>
