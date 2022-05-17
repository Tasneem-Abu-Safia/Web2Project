<?php
require("db.php");
$id = $_GET['id'];
$upID=$_GET['upID'];

    $s = "select * from teachers where id = $upID";
    $r = mysqli_query($conn,$s);
    while ($row = mysqli_fetch_assoc($r)) {
       $upID = $row['id'];
       $upname = $row['name'];
       $upemail = $row['email'];
       $upmobile = $row['mobile'];
    }

    
    if (isset($_POST['submit'])) {
        $upID1 = $_POST['id'];
        $upname1 = $_POST['name'];
        $upemail1 = $_POST['email'];
        $upmobile1 = $_POST['mobile'];

        $ss = "update teachers set id = $upID1 , name = '$upname1' , email = '$upemail1' , mobile = '$upmobile1' where id = $upID";
        $rr = mysqli_query($conn,$ss);
        if ($rr) {
            header("location:AdminTeacher.php?id=$id");

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

   <section class="body" style ="margin-top: 5%;">  
    <div class="container" >
        <header>Update Teacher</header>
        <form method="POST" action="">
        <div class="inputarea" style="    margin: 21px 0;">
            <input type="text" name ="id" id="name" value ="<?php echo $upID ; ?>" required autocomplete="off">
            <label>ID</label>
        </div>
        <div class="inputarea" style="    margin: 21px 0;">
            <input type="text" name ="name" id="name" value ="<?php echo $upname ;?>" required autocomplete="off">
            <label>UserName</label>
        </div>
  
        <div class="inputarea" style="    margin: 21px 0;">
            <input type="email" name ="email" id="name"  value ="<?php echo $upemail ;?>"required autocomplete="off">
            <label>Email</label>
        </div>
        <div class="inputarea" style="    margin: 21px 0;">
            <input type="text" name ="mobile" id="name"  value ="<?php echo $upmobile ;?>"required autocomplete="off">
            <label>Mobile</label>
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