<?php 
$namaErr = $emailErr = $usernameErr = $passwordErr = "";
$name = $email = $username = $password = "";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["nama"])) {
    $nameErr = "Nama wajib diisi";
  } else {
    $name=test_input($_POST['nama']);
  }
 $name = test_input($_POST["nama"]);
  if (!preg_match("/^[a-zA-Z]*$/",$name)) {
    $namaErr = "Hanya huruf dan spasi yang dibolehkan";
    $nama=test_input($_POST['nama']);
  }
}

 ?>