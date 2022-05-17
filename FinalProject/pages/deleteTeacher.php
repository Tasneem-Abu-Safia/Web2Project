<?php
require("db.php");
$id = $_GET['id'];
$delID=$_GET['delID'];

    $s = "delete from teachers where id = $delID";
  $r = mysqli_query($conn,$s);

    header("location:AdminTeacher.php?id=$id");



?>