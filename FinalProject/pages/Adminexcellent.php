<?php
session_start();
require("db.php");
$idAdmin = $_GET['id'];
$s = "select * from admin where id = $idAdmin";
$res = mysqli_query($conn,$s);

$ro= mysqli_fetch_assoc($res);
  $name = $ro["name"];
  
$sql = "select *  from students , grades ,cousrses 
where students.id = grades.student_id and cousrses.C_id = grades.course_id and grades.grade ='A+' ";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin</title>

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

<div id="mySidenav" class="sidenav" style ="width :260px ">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="AdminBord.php?id=<?php echo $idAdmin ;?>">Name : <?php echo $name ;?></a>
    <a href="AdminTeacher.php?id=<?php echo $idAdmin ;?>">Teachers</a>
    <a href="AdminStudent.php?id=<?php echo $idAdmin ;?>">Students</a>
    <a href="AdminCourses.php?id=<?php echo $idAdmin ;?>">Courses</a>
    <a href="Adminexcellent.php?id=<?php echo $idAdmin ;?>">Excellent Students</a>
    <a href="logoutAdmin.php?id=<?php echo $idAdmin ;?>">Logout</a>
</div>


<span id="icon"  onclick="openNav()">&#9776; </span>
<div class ="teachertable" style="    width: 46%;">

<table class="table" id ="teacher" style ="margin-left: 22%;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Grade</th>
      <th scope="col">Course</th>
    </tr>
  </thead>
  <tbody>
  <?php
   while($row = mysqli_fetch_assoc($result)){?>
   <tr>
     <td><?php echo $row["id"]; ?></td>
     <td><?php echo $row["name"]; ?></td>
     <td><?php echo $row["email"]; ?></td>
     <td><?php echo $row["grade"]; ?></td>
     <td><?php echo $row["C_name"]; ?></td>
   <?php }?>
   </tr>
  </tbody>
</table>
</div>


  

<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

</script>


      
    </div>
</div>
   
</body>
</html> 
