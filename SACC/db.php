<?php

$dsn = "mysql:host=localhost;dbname=codes;charset=utf8mb4" ;
 $dbServername = "localhost";
 $user = "talal" ; // "root"
 $pass = "!nc0rrect" ; // "", "root"
 $dbname = "codes";
 $conn = mysqli_connect($dbServername, $user, $pass, $dbname);


//  try {

//     //  $db = new PDO($dsn, $user, $pass) ;
//     //  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) ;

//  } 
//  catch( PDOException $ex) {
//      echo $ex->getMessage() ;
//      echo "<p>Error occured try later.</p>";
//      exit ; 
//  }