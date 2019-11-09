<?php
@require_once 'connection.php';
  $sql ="SELECT * FROM provinsi";
  $query= $conn -> prepare($sql);
  $query-> execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  $data =$results;
  json_encode($data);
 ?>