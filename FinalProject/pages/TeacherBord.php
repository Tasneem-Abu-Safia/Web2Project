<?php
session_start();
require("db.php");
$id = $_GET['id'];
$sql = "select * from teachers where id = $id";
$result = mysqli_query($conn,$sql);
$username ;

while($row = mysqli_fetch_assoc($result)){
   
  $username = $row["name"];
  $email = $row['email'];
  $mobile = $row['mobile'];
  $lastvisit= $row['LastVisit'];

  }
  $s = "select * from cousrses where teacher_id = $id";
  $r = mysqli_query($conn,$s);

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
        
    </style>

</head>
<body>

<div id="mySidenav" class="sidenav" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
    <a href="TeacherBord.php?id=<?php echo $id;?>">Name : <?php echo $username ;
    
    ?></a>
    <a href="AddGradeTeacher.php?id=<?php echo $id;?>">Add Grades</a>
    <a href="logoutTeacher.php?id=<?php echo $id;?>">Logout</a>

</div>

<span id="icon"  onclick="openNav()">&#9776; </span>

<div style ="    text-align: center;
    color: white;
    font-size: 70px;
    margin-top: 2%;">
  <p> Welcom <?php echo $username ;
  
    ?></p>
</div>
<div class ="teachertable" style="margin-top:6%;">

<table class="table" id ="teacher" style="margin-top:7%;">
<tbody>
    <tr>
      <th scope="col">ID</th>
      <td><?php echo $id; ?></td>
    </tr>
    <tr>
    <th scope="col">Name</th>
    <td><?php echo $username; ?></td>
    </tr>
    <tr>
    <th scope="col">Email</th>
    <td><?php echo $email; ?></td>
    </tr>
    <tr>
    <th scope="col">Mobile</th>
    <td><?php echo $mobile; ?></td>
    </tr>
    <tr>
    <th scope="col">Last Visit</th>
    <td><?php echo $lastvisit; ?></td>
    </tr>
    <tr>
    <th scope="col">Cousrses</th>
    <td style="    text-align: center;"> 
     <?php
   while($rows = mysqli_fetch_assoc($r)){?>
  
     <?php echo "-".$rows["C_name"]; ?><br>
     
   <?php }?>
   </td>
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
