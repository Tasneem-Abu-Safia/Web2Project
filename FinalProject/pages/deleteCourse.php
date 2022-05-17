<?php
require("db.php");
$id = $_GET['id'];
$delID=$_GET['delID'];

    $sx = "delete from cousrses where C_id = $delID";
    $r = mysqli_query($conn,$sx);

    header("location:AdminCourses.php?id=$id");



?>