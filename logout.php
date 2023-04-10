<?php
  session_start();
  session_destroy();
  header("location: /pg life/PGLIFE/index.php");
  header("location: /pg life/PGLIFE/property_detail.php");
  header("location: /pg life/PGLIFE/property_list.php");
  exit();
?>
