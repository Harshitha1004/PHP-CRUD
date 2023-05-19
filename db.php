<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'fcsmic',
  '3306'
) or die(mysqli_erro($mysqli));

?>
