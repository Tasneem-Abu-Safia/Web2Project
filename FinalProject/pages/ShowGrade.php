<?php
session_start();
require("db.php");
$id = $_GET['id'];
$sql = "select * from students where id = $id";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
   

    $username = $row["name"];
    $email = $row["email"];
    }

    $grad = "select * from grades where student_id = $id ";
   
    $result2 = mysqli_query($conn,$grad);
  
   

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student</title>

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
        
    </style>

</head>
<body>

<div id="mySidenav" class="sidenav" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
    <a href="StudentBord.php?id=<?php echo $id;?>">Name : <?php echo $username ;?></a>
    <a href="ShowGrade.php?id=<?php echo $id;?>">Show Grades</a>

    <a href="logoutStudent.php?id=<?php echo $id;?>">Logout</a>

</div>

<span id="icon"  onclick="openNav()">&#9776; </span>



<div class ="teachertable" style="margin-top:6%;">

<table class="table" id ="teacher" style="margin-top:7%;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Grade</th>
      <th scope="col">Course ID</th>
      <th scope="col">Course Name</th>
     
     
    </tr>
  </thead>
  <tbody>
  
  <?php
   while($rows = mysqli_fetch_assoc($result2)){?>
   <tr>
     <td><?php echo $rows["grade"]; ?></td>
     <td><?php echo $rows["course_id"]; ?></td>
     <td><?php 
      $course = "select * from cousrses where C_id = " .$rows['course_id'] ;
      $result3 = mysqli_query($conn,$course);
      while($nameCourse = mysqli_fetch_assoc($result3)){
      echo $nameCourse["C_name"]; 
      
     ?></td>

   <?php }}?>

  

   </tr>
  </tbody>
</table>
</div>


<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "256px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

</script>


      
    </div>
</div>
   
</body>
</html> 
