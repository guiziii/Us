<?php
  define('HOST','mysql.hostinger.com.br');
  define('USER','u691861770_zuurc');
  define('PASS','IMW9lhGqkt');
  define('DB','u691861770_ipart');
  $con = mysqli_connect(HOST,USER,PASS,DB);

  $login_cli= $_POST['login_cli'];

  $result = mysqli_query($con,"SELECT * FROM Cliente where login_cli='$login_cli'");

  $row = mysqli_fetch_array($result);
  
  $data = $row[0];
  
  if($data)
  {
    echo $data;
  }
  else
  {
    echo 0;
  }
  mysqli_close($con);
?>