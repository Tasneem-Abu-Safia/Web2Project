<?php
session_start();
require("db.php");


if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];
    $sql= "select * from admin  ";
    $select = mysqli_query($conn,$sql) ;
    $row = $select->fetch_assoc();
    if ($row) {
        $id = $row['id'];
    $username = $row["name"];
    $userpassword = $row["pass"];
    
    
    
if ($name == $username  && $password==$userpassword) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $userpassword;
    
        setcookie('username',$_POST['username'],time()+3600+"/");
        setcookie('password',$_POST['password'],time()+3600+"/");
 
      
    header("location:AdminBord.php?id=$id");
}
else{
    $error = "Invalid Account";
  }}
else{
    $error = "Invalid Account";
  }

}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Admin Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet" />
    <link rel="icon" href="img/button ship.svg">
    <link rel="icon" href="img/im1.png">

    <link rel="stylesheet" href="HomeStyle.css">

</head>
<body>

   <section class="body">  
    <div class="container">
        <header>Admin</header>
        <form method="POST" action="">
        <div class="inputarea">
            <input type="text" name ="username" id="name" required autocomplete="off">
            <label>UserName</label>
        </div>
        <div class="inputarea">
            <input class="pass" name ="password" type="password" required>
            <span class="show">SHOW</span>
            <label>Password</label>
        </div>
        <div id ="error">
        <?php echo isset($error)?$error:'';?>
        </div>
        <div class="button">
            <div class="inner"></div>    
          
      <button type="submit" name="submit" >Login</button> 
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