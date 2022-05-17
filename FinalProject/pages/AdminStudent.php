<?php
session_start();
require("db.php");
$idAdmin = $_GET['id'];
$s = "select * from admin where id = $idAdmin";
$result = mysqli_query($conn,$s);

$ro= mysqli_fetch_assoc($result);
  $name = $ro["name"];

$sql = "select * from students";
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
         .update{
          background-color: #0d6efd;
    height: 35px;
    border: none;
    width: 72px;
    border-radius: 6px;
   
    color: white;
        }
        .add{
          background-color: white;
    height: 41px;
    border: none;
    margin-left: 20%;
    width: 10%;
    border-radius: 6px;
    font :bold;
    color: #0d6efd;
        }
        .delete{
          background-color: #fd0d39f7;
    height: 35px;
    border: none;
    width: 72px;
    border-radius: 6px;
    margin-left: 12px;
    color: white;
        }
       .table td{
          padding : 16px;
        }
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
<div class ="teachertable" style="width: 58%;
    margin-left: 6%; margin-top :4%">

<table class="table" id ="teacher">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col"> # </th>


    </tr>
  </thead>
  <tbody>
  <?php
   while($row = mysqli_fetch_assoc($result)){?>
   <tr>
     <td><?php echo $row["id"]; ?></td>
     <td><?php echo $row["name"]; ?></td>
     <td><?php echo $row["email"]; ?></td>
     <td><?php echo $row["mobile"]; ?></td>
     <td>
     <a href="updateStudent.php?id=<?php echo $idAdmin;?> & upID=<?php echo $row["id"];?>">
     <button class ="update">Update</button></a>
     <a href="deleteStudent.php?id=<?php echo $idAdmin;?> & delID=<?php echo $row["id"];?>">
     <button class ="delete">Delete</button></a>
     </td>
   <?php }?>
   </tr>
  </tbody>
</table>
</div>
<div >
<a href="AddStudent.php?id=<?php echo $idAdmin?>" style=" margin-left: 53%;">
  <button class="add" type ="submit" >Add</button> </a>

  
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
