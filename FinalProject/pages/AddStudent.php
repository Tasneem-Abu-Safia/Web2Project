<?php
session_start();
require("db.php");
$idAdmin = $_GET['id'];

if (isset($_POST['submit'])) {
  
   
$S_id= $_POST['id'];
$S_name= $_POST['username'];
$S_email=$_POST['email'];
$S_pass= $_POST['pass'];
$S_mobile = $_POST['mobile'];
$ins2->execute();
  header("location: AdminStudent.php?id= $idAdmin");

  }


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Admin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet" />
    <link rel="icon" href="im1.png">

    <link rel="stylesheet" href="HomeStyle.css">

</head>
<body>

   <section class="body" style="margin-top : 2%;">  
    <div class="container" style="    padding: 37px 40px;">
        <header>Add Student</header>
        <form method="POST" action="">
        <div class="inputarea" style="    margin: 19px 0;">
            <input type="text" name ="id"  required autocomplete="off">
            <label>ID</label>
        </div>
        <div class="inputarea" style="    margin: 19px 0;">
            <input type="text" name ="username"  required autocomplete="off">
            <label>UserName</label>
        </div>
         <div class="inputarea" style="    margin: 19px 0;">
            <input type="Password" name ="pass" id="name" required autocomplete="off">
            <label>Password</label>
        </div>
        <div class="inputarea" style="    margin: 19px 0;">
            <input type="email" name ="email" id="name" required autocomplete="off">
            <label>Email</label>
        </div>
        <div class="inputarea" style="    margin: 19px 0;">
            <input type="text" name ="mobile" id="name" required autocomplete="off">
            <label>Mobile</label>
        </div>
     
        <div class="button">
            <div class="inner"></div>    
          
      <button type="submit" name="submit" >ADD</button> 
        </div>  
            
             
        </form>
    </div></section>
   <script>
        var input =document.querySelector('.pass');
  var show =document.querySelector('.show');
  show.addEventListener('click' , active);
  function active(){
      if (input.type === "password") {
        input.type = "text" ;
        show.style.color = "#fc00ff" ;
        show.textContent = "HIDE";
      }else{
        input.type = "password" ;
        show.textContent = "SHOW";
        show.style.color = "#111" ;

      }
  }  
   </script>
</body>
</html>