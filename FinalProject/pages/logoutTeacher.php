<?php
session_start();
require("db.php");
$id = $_GET['id'];
date_default_timezone_set("Asia/Jerusalem");

$time = date("Y-m-d || h:i:sa");
$s = "update  teachers set LastVisit = '$time' where id = $id";
$r = mysqli_query($conn,$s);



session_destroy();
setcookie("username",$name,time()-3600);
setcookie("password",$password,time()-3600);
header("location: Home.html");
?>
</body>
</html>