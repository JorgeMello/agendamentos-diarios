
<?php
$con = mysqli_connect("localhost","root","","agenda_aulas");

// Check connection
if (mysqli_connect_errno())
  {
  echo "FALHOU A CONEXÃO MySQL: " . mysqli_connect_error();
  }
?>

