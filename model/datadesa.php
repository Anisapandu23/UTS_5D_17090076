<?php
@require_once 'connection.php';
  $sql ="SELECT * FROM desa";
  $query= $conn -> prepare($sql);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  $data =$results;
 ?>