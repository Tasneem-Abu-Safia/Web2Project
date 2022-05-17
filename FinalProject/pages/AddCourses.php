<?php
session_start();
require("db.php");
$id = $_GET['id'];

if (isset($_POST['submit'])) {
  
   
$C_name=$_POST['username'];
$C_Tid=$_POST['id_teacher'];
$insC4->execute();
header("location:AdminCourses.php?id=$id");

  }
$s = "select id , name from teachers ";
$results = mysqli_query($conn,$s);


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

   <section class="body">  
    <div class="container">
        <header>Add Course</header>
        <form method="POST" action="">
       
        <div class="inputarea">
            <input type="text" name ="username"  required autocomplete="off">
            <label>UserName</label>
        </div>
        <div class="inputarea">
        <select  name ="id_teacher"  style="  height: 100%;
    width: 100%;
    border: 1px solid silver;
    padding-left: 15px;
    outline: none;
  font-size: 18px;
  transition: 0.8s;">
   <option value="" disabled selected hidden >Choose Teacher ID</option>
   <?php
   while($row = mysqli_fetch_assoc($results)){?>
    <option value="<?php echo $row["id"]; ?>">
    <?php echo $row["id"]; ?> ----->   <?php echo $row["name"]; ?>

    </option>
     
   <?php }?>
</select>

 
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