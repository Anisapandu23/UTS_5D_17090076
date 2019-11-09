<?php
//error_reporting(0);
session_start();
@require_once ('connection.php');
@require_once ('function.php');
error_reporting(0);
if(isset($_POST['regist']))
{
  $nama=$_POST['nama'];
  $email=$_POST['email']; 
  $notelp=$_POST['no_telp'];
  $jalan=$_POST['jalan'];
  $norumah=$_POST['no_rumah'];
  $rt=$_POST['rt'];
  $rw=$_POST['rw'];
  $provinsi=$_POST['provinsi'];
  $kotakab=$_POST['kotakab'];
  $kecamatan=$_POST['kecamatan'];
  $desa=$_POST['desa'];
  $password=md5($_POST['password']);
  $sql="INSERT INTO  user(nama,email,no_telp,jalan,rt,rw,no_rumah,kode_provinsi,kode_kotakab,kode_kecamatan,kode_desa,password) VALUES(:nama,:email,:notelp,:jalan,:norumah,:rt,:rw,:provinsi,:kotakab,:kecamatan,:desa,:password)";
  $query = $conn->prepare($sql);
  $query->bindParam(':nama',$nama,PDO::PARAM_STR);
  $query->bindParam(':email',$email,PDO::PARAM_STR);
  $query->bindParam(':notelp',$notelp,PDO::PARAM_INT);
  $query->bindParam(':jalan',$jalan,PDO::PARAM_STR);
  $query->bindParam(':rt',$rt,PDO::PARAM_INT);
  $query->bindParam(':rw',$rw,PDO::PARAM_INT);
  $query->bindParam(':norumah',$norumah,PDO::PARAM_INT);
  $query->bindParam(':provinsi',$provinsi,PDO::PARAM_INT);
  $query->bindParam(':kotakab',$kotakab,PDO::PARAM_INT);
  $query->bindParam(':kecamatan',$kecamatan,PDO::PARAM_INT);
  $query->bindParam(':desa',$desa,PDO::PARAM_INT);
  $query->bindParam(':password',$password,PDO::PARAM_STR);
  try {
   $query->execute();
   // do other things if successfully inserted
  }catch(PDOException $e){
   if ($e->errorInfo[1] == 1062) {
    redirect('travel=regist');
      // duplicate entry, do something else
   } else {
      // an error other than duplicate entry occurred
   }
  }
  $lastInsertId = $conn->lastInsertId();
  if($lastInsertId)
  {
    echo "<script>alert('Registration successfull. Now you can login');</script>";
    $_SESSION['regist_success']='Registrasi Berhasil !';
    redirect('travel=login');
  }
  else 
  {
    echo "<script>alert('Something went wrong. Please try again');</script>";
  }
}
?>