<?php
require "db.php" ;


$id = mysqli_real_escape_string($conn, $_POST['Code']);
session_start();


        
$sql = "SELECT id FROM ids WHERE id = $id " ;  // fixed query
// $sql = "SELECT id FROM ids WHERE id= '$id'" ;  // fixed query
// echo $id;


error_reporting(E_ALL);
ini_set('display_errors', '1');

try {
    //  $stmt = $db->prepare($sql) ;
    //  $stmt->bindParam("s", $id, PDO::PARAM_INT, 9) ;
    //  $stmt->execute();
     
     $results = mysqli_query($conn, $sql);



    //  $result = $stmt->fetchAll(PDO::FETCH_COLUMN) ;

    $resultCheck = mysqli_num_rows($results);
    if ($resultCheck> 0){
        while ($resultCheck > 0)
        { 
           
           ?>
        <!DOCTYPE html>
           <html lang="en">
           <head>
           <meta charset="UTF-8">
               <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
               <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
               <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
               <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
               <script>
               
                   $(function(){
   
                   $("#info").animate({'margin-top':'50px'}, 1000);
                   
                   });
                   </script>
               <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title>SACC Elections</title>
           </head>
           <body>
           <form  name="myForm" action="sucess.php"  onsubmit="return validateForm()" method="post" >
           
           <div id="info" >
               
               <div class="container" style="border: 1px solid black; margin-bottom:50px; background-color:#dddddd">
                   <div class="row">
                           <div class="col s6" style="padding-left:30%; padding-top: 5%"><img src="1.png" alt="" style="width:40%; border-radius:50%;"></div>
                           <div class="col s12" style="text-align:center; margin-left:-10%" ><h4>SACC Elections</h4></div>
                           <div class="col s6" style="text-align:center; margin-left:-2%;padding-bottom:15%;" >Executive Board 2020-2021</div>
                           <div class="col s12" style="border: 0px solid red; margin-left: -20%; width:120%"> 
                               <label style="display:inline-block;width:10em">President:</label>          
                               <div class="input-field inline" style="width:90%">
                                   <select name="p" class="browser-default" required>
                                       <option value="" disabled selected>President</option>
                                       <option value="1">Haris Ali</option>
                                       <option value="2">Dawood Muzzamil</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col s12" style="border: 0px solid red; margin-left: -20%;margin-right: 20%;width:120%"> 
                           <label style="display:inline-block;width:10em"> Vice President:</label>
   
                               <div class="input-field inline" style="width:90%">
                               
                                   <select name="vp" class="browser-default" required>
                                       <option value="" disabled selected>Vice President</option>
                                       <option value="1">Aun Jaffri</option>
                                       <option value="2">No</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col s12" style="border: 0px solid red; margin-left: -20%; width:120%"> 
                               <label style="display:inline-block;width:10em">Secretary:</label>           
                               <div class="input-field inline" style="width:90%">
                                   <select name="s" class="browser-default" required>
                                       <option value="" disabled selected>Secretary</option>
                                       <option value="1">Muhammad Ali</option>
                                       <option value="2">No</option>
                                   </select>
                               </div>
                           </div>
   
                           <div class="col s12" style="border: 0px solid red; margin-left: -20%; width:120%"> 
                               <label style="display:inline-block;width:10em">Organisation Head:</label>
                               <div class="input-field inline" style="width:90%">
                                   <select name="o" class="browser-default" required>
                                       <option value="" disabled selected>Organisation Head</option>
                                       <option value="1">Talal Ahmad</option>
                                       <option value="2">Ikran Arshad</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col s12" style="border: 0px solid red; margin-left: -20%; width:120%"> 
                               <label style="display:inline-block;width:10em">Organisation Head:</label>
                               <div class="input-field inline" style="width:90%">
                                   <select name="pr" class="browser-default" required>
                                       <option value="" disabled selected>PR Head</option>
                                       <option value="1">Safee Adam</option>
                                       <option value="2">Haider Raheem</option>
                                   </select>
                               </div>
                           </div>
                           
                           <div class="col s12" style="border: 0px solid red; margin-left: -20%; width:120%"> 
                               <label style="display:inline-block;width:10em">Treasurer:</label>
                               <div class="input-field inline" style="width:90%">
                                   <select name="t" class="browser-default">
                                       <option value="" disabled selected required>Treasurer</option>
                                       <option value="1">Asad Mehdi</option>
                                       <option value="2">No</option>
                                   </select>
                               </div>
                               <div style="float:right">
                               <button class="btn waves-effect waves-light" name="submit" type="submit" style="margin-top:100px;display:block;">Submit
                                   <i class="material-icons right">send</i>
                               </button>
                               </div>
                           </div>
                       
               </div>
               
           
           </div>
           </form>
           </body>
           </html>
   <?php


       
       $sql = "DELETE FROM `ids` WHERE id= $id;";
       $results = mysqli_query($conn, $sql);
      
   
       $resultCheck--;
           
        }
        
    }
    else {
        header("Location: failed.php");
    }

    
     
     
    //  var_dump($result);

 } catch(PDOException $ex) {
    echo $ex->getMessage() ;
    die("<p>Try Later</p>") ;
 }
 

?>