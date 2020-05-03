<?php
require "db.php" ;




$p = mysqli_real_escape_string($conn, $_POST['p']);
$vp = mysqli_real_escape_string($conn, $_POST['vp']);
$s = mysqli_real_escape_string($conn, $_POST['s']);
$o = mysqli_real_escape_string($conn, $_POST['o']);
$pr = mysqli_real_escape_string($conn, $_POST['pr']);
$t = mysqli_real_escape_string($conn, $_POST['t']);

$sql = "INSERT INTO final (p, vp, s, o, pr, t) VALUES ($p,$vp,$s,$o,$pr,$t)";
$result =  mysqli_query($conn, $sql);

session_unset();
session_destroy();

header("Location: end.html");








