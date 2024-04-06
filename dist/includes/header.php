<?php
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
date_default_timezone_set("America/Sao_Paulo"); 

if($_SESSION['type']=="admin")
  include('../dist/includes/header_admin.php');
else
  include('../dist/includes/header_faculty.php');
?>


