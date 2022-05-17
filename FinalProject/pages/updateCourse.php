<?php
session_start();
require("db.php");
$id = $_GET['id'];
$upID=$_GET['upID'];


$s = "select * from cousrses where C_id = $upID";
$r = mysqli_query($conn,$s);
while ($row = mysqli_fetch_assoc($r)) {
    $upname = $row['C_name'];
    $upteacher_id = $row['teacher_id'];

 }

 $sql1 = "select id , name from teachers ";
$results = mysqli_query($conn,$sql1);

if (isset($_POST['submit'])) {
    $upname1 = $_POST['username'];
    $upte1 = $_POST['id_teacher'];


    $ss = "update cousrses set C_name = '$upname1' , teacher_id = $upte1 where C_id = $upID";
    $rr = mysqli_query($conn,$ss);
    if ($rr) {
        header("location:AdminCourses.php?id=$id");

    }
echo "error";
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

   <section class="body">  
    <div class="container">
        <header>Update Course</header>
        <form method="POST" action="">
       
        <div class="inputarea">
            <input type="text" name ="username" value ="<?php echo $upname ; ?>" required autocomplete="off">
            <label>UserName</label>
        </div>
        <div class="inputarea">
        <select  name ="id_teacher"   style="  height: 100%;
    width: 100%;
    border: 1px solid silver;
    padding-left: 15px;
    outline: none;
  font-size: 18px;
  transition: 0.8s;">
   <option  disabled selected hidden ><?php echo  $upteacher_id;?></option>
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
          
      <button type="submit" name="submit" >Update</button> 
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