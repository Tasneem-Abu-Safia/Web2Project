<?php
require("db.php");
$id = $_GET['id'];
$delID=$_GET['delID'];

    $s = "delete from students where id = $delID";
  $r = mysqli_query($conn,$s);

    header("location:AdminStudent.php?id=$id");



?>