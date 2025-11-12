<?php
$username = $_POST['username'];
$password = $_POST['pass'];
if ((($username == "bek") && ($password == "bekganteng")) ||
    (($username == "amir") && ($password == "passamir"))) {
  echo "Login sukses";
}
else {
  echo "Login gagal";
}
?>  