<?php 
$servername='localhost';
$dbname='travelindo';
$username='root';
$password='';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname","$username","");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    //tampilkan pesan kesalahan jika koneksi gagal
    print "Koneksi atau query bermasalah: " . $e->getMessage()."<br/>";
    die();
}

?>