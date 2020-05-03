
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

        $("#info").animate({'margin-top':'50px'}, 2000);
        
        });
        </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SACC Elections</title>


</head>
<body>
    
    <form  name="myForm" action="vote.php"  onsubmit="return validateForm()" method="post" >
   
        <div id="info">
            
        <div class="container" style="border: 1px solid black; margin-bottom:50px">
            <div class="row">
            <div class="col s6" style="padding-left:30%; padding-top: 5%"><img src="1.png" alt="" style="width:40%; border-radius:50%;"></div>
            <div class="col s12" style="text-align:center; margin-left:-10%" ><h4>SACC Elections</h4></div>
            <div class="col s6" style="text-align:center; margin-left:-2%;padding-bottom:15%;" >Executive Board 2020-2021</div>
                <div class="input-field col s6">
                        <i class="material-icons prefix">edit</i>
                        <input value="" id="Code" name="Code"  type="text" class="validate" required  pattern="(\d{10})">
                        <label class="active" for="Code">Code</label>
                        <span class="helper-text" data-error="Invalid Format" data-success=""></span>
                    </div>                <div class="col s6" style="padding-left:10%">
                    <button class="btn waves-effect waves-light" name="submit" type="submit" style="margin-top:100px;display:block;">Advance
                        <i class="material-icons right">send</i>
                    </button></div>
                
                </div>      
            </div>
            
        
        </div>
    </form>

</body>
</html>