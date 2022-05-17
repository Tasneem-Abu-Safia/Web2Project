<?php
session_start();
require("db.php");
$id = $_GET['id'];

if (isset($_POST['submit'])) {
  
$G_sid=$_POST['id_stu'];
$G_cid=$_POST['id_cou'];
$G_grade =$_POST['grade'];
$ins5->execute();
header("location:TeacherBord.php?id=$id");

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Teacher</title>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="Css/font-awesome.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet" />
      <link rel="icon" href="im1.png">
      <link rel="stylesheet" href="pages.css">
      <link rel="stylesheet" href="HomeStyle.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">



    <style>
        select{
          height: 100%; 
    width: 75%;
    border: 1px solid silver;
    padding-left: 15px;
    outline: none;
  font-size: 18px;
  transition: 0.8s;
        }
    </style>

</head>
<body>

   <section class="body">  
    <div class="container" style ="    width: 38%;">
        <header>Add Grades</header>
        <form method="POST" action="">
        <div class="inputarea">
        <select  name ="id_stu"  >
   <option value="" disabled selected hidden >Choose Student ID</option>
   <?php
   $s = "select id , name from students ";
   $results = mysqli_query($conn,$s);
   while($row = mysqli_fetch_assoc($results)){?>
    <option value="<?php echo $row["id"]; ?>">
    <?php echo $row["id"]; ?> ----->   <?php echo $row["name"]; ?>

    </option>
     
   <?php }?>
</select>
        </div>


        <div class="inputarea">
        <select  name ="id_cou"  >
   <option value="" disabled selected hidden >Choose Cousrse ID</option>
   <?php
   $C = "select * from cousrses where teacher_id = $id";
   $Cresults = mysqli_query($conn,$C);
   while($Crow = mysqli_fetch_assoc($Cresults)){?>
    <option value="<?php echo $Crow["C_id"]; ?>">
    <?php echo $Crow["C_id"]; ?> ----->   <?php echo $Crow["C_name"]; ?>

    </option>
     
   <?php }?>
</select>
        </div>
        <div class="inputarea">
        <select  name ="grade"  >
   <option value="" disabled selected hidden >Choose Grade</option>
   <option value="A+" >A+</option>
   <option value="B+" >B+</option>
   <option value="C+" >C+</option>
   <option value="D+" >D+</option>
   <option value="A-" >A-</option>
   <option value="B-" >B-</option>
   <option value="C-" >C-</option>
   <option value="D-" >D-</option>


   
</select>
        </div>



        <div class="button" style="      margin-right: 55px;  width: 36%; float: right;
    
    width: 36%;">
            <div class="inner"></div>    
          
      <button type="submit" name="submit" >ADD</button> 

      
        </div>  
        <div class="button" style="    width: 36%;     float: right;
    width: 36%;
    margin-right: 25px;">
            <div class="inner"></div>    
          
     <a href="TeacherBord.php?id=<?php echo $id; ?>"> <button type="" name="submit" >Back</button> </a>

      
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
</body></html> 
