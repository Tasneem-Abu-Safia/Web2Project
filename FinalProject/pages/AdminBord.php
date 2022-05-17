<?php
session_start();
require("db.php");
$id = $_GET['id'];
$username ; $email; $mobile;
$sql = "select * from admin where id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
  $username = $row["name"];
  $email = $row['email'];
  $mobile = $row['mobile'];
  $LastVisit = $row['LastVisit'];
  if (isset($_POST['submit'])) {
    $newname = $_POST['username'];
    $newemail = $_POST['email'];
    $newmobile = $_POST['mobile'];
    $s = "update  admin set name = '$newname', email = '$newemail' , mobile ='$newmobile'
    where id = $id";
    $r = mysqli_query($conn,$s);
    header("location:AdminBord.php?id=$id");
  }
  

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

<div id="mySidenav" class="sidenav" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 
    <a href="AdminBord.php?id=<?php echo $id ;?>">Name : <?php echo $username ;?></a>
    <a href="AdminTeacher.php?id=<?php echo $id ;?>">Teachers</a>
    <a href="AdminStudent.php?id=<?php echo $id ;?>">Students</a>
    <a href="AdminCourses.php?id=<?php echo $id ;?>">Courses</a>
    <a href="Adminexcellent.php?id=<?php echo $id ;?>">Excellent Students</a>
    <a href="logoutAdmin.php?id=<?php echo $id ;?>">Logout</a>

</div>

<span id="icon"  onclick="openNav()">&#9776; </span>




<section class="body">  
    <div class="container" style ="width: 32%;
    margin-left: 37%;">
        <header><?php echo $username ;?> Profile</header>
        <form method="POST" action="">
        <div class="inputarea" style="    margin: 21px 0;">
            <input type="text" name ="username" id="name" value ="<?php echo $username ;?>" required autocomplete="off">
            <label>UserName</label>
        </div>
        <div class="inputarea" style="    margin: 21px 0;">
            <input type="email" name ="email" id="name" value ="<?php echo $email ;?>" required autocomplete="off">
            <label>Email</label>
        </div>
        <div class="inputarea" style="    margin: 21px 0;">
            <input type="text" name ="mobile" id="name" value ="<?php echo $mobile ;?>" required autocomplete="off">
            <label>Mobile</label>
        </div>
        <div class="inputarea" style="    margin: 21px 0;">
            <input type="text" name ="LastVisit" id="name" value ="<?php echo "Last Visit :".$LastVisit ;?>" disabled autocomplete="off">
          
        </div>
        <div class="button">
            <div class="inner"></div>    
          
      <button type="submit" name="submit" >Update</button> 
        </div>  
            
             
        </form>
    </div></section>
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
