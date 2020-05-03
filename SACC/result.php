<?php

 require "db.php";
$sql = "SELECT p FROM final GROUP BY p ORDER BY COUNT(*) DESC LIMIT 2;";
$pResult = mysqli_query($conn, $sql);
$pResult=mysqli_fetch_array($pResult,MYSQLI_ASSOC);
// $pResult = $pResult->strip_tags();
$sql = "SELECT vp FROM final GROUP BY vp ORDER BY COUNT(*) DESC LIMIT 1;";
$vpResult = mysqli_query($conn, $sql);
$vpResult=mysqli_fetch_array($vpResult,MYSQLI_ASSOC);
$sql = "SELECT s FROM final GROUP BY s ORDER BY COUNT(*) DESC LIMIT 1;";
$sResult = mysqli_query($conn, $sql);
$sResult=mysqli_fetch_array($sResult,MYSQLI_ASSOC);
$sql = "SELECT o FROM final GROUP BY o ORDER BY COUNT(*) DESC LIMIT 1;";
$oResult = mysqli_query($conn, $sql);
$oResult=mysqli_fetch_array($oResult,MYSQLI_ASSOC);
$sql = "SELECT pr FROM final GROUP BY pr ORDER BY COUNT(*) DESC LIMIT 1;";
$prResult = mysqli_query($conn, $sql);
$prResult=mysqli_fetch_array($prResult,MYSQLI_ASSOC);
$sql = "SELECT t FROM final GROUP BY t ORDER BY COUNT(*) DESC LIMIT 1;";
$tResult = mysqli_query($conn, $sql);
$tResult=mysqli_fetch_array($tResult,MYSQLI_ASSOC);
$sql = "SELECT COUNT(*) FROM final";
$ttResult = mysqli_query($conn, $sql);
$ttResult=mysqli_fetch_array($ttResult,MYSQLI_ASSOC);


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
    <title>Thanks for Voting.</title>
</head>

<body>


<div id="info" >
       
        <div class="container" style="border: 1px solid black; margin-bottom:50px; background-color:#dddddd">
            <div class="row">
                    <div class="col s6" style="padding-left:30%; padding-top: 5%"><img src="1.png" alt="" style="width:40%; border-radius:50%;"></div>
                    <div class="col s12" style="text-align:center; margin-left:-10%" ><h4>SACC Elections</h4></div>
                    <div class="col s6" style="text-align:center; margin-left:-2%;padding-bottom:15%;" >Executive Board 2020-2021</div>
                    <div class="col s12" style="text-align:center; margin-left:-10%"> 
                    <table>
        <tr>
            <td>President</td>
            <td><?php var_export($pResult["p"]);  ?> </td>
        </tr>
        <tr>
            <td>VP</td>
            <td><?php var_export($vpResult["vp"]); ?> </td>
        </tr>
        <tr>
            <td>GS</td>
            <td><?php var_export($sResult["s"]); ?> </td>
        </tr>
        <tr>
            <td>OH</td>
            <td><?php var_export($oResult["o"]); ?> </td>
        </tr>
        <tr>
            <td>PR</td>
            <td><?php var_export($prResult["pr"]); ?> </td>
        </tr>
        <tr>
            <td>Treasurer</td>
            <td><?php var_export($tResult["t"]);?> </td>
        </tr>
        <tr>
            <td>Total</td>
            <td><?php var_export($ttResult["COUNT(*)"]);?> </td>
        </tr>
        
    </table>                        
                    </div>
                    
                
           </div>
           
       
       </div>
    
</body>
</html>

