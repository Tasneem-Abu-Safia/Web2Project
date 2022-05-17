<?php
$conn = mysqli_connect("localhost","root","","FinalProject");
if (!$conn) {
    die("Error".mysqli_connect_error());
    
}
$ins1 = $conn->prepare("
INSERT INTO admin (id,name,pass,email,mobile) VALUES (?, ?, ?,?,?)");
$ins1->bind_param("isssi",$id,$name,$pass,$email,$mobile);

$ins2 = $conn->prepare("
INSERT INTO students (id,name,email,pass,mobile) VALUES (?, ?, ?,?,?)");
$ins2->bind_param("isssi",$S_id,$S_name,$S_email,$S_pass,$S_mobile);

$ins3= $conn->prepare("
INSERT INTO teachers (id,name,pass,email,mobile) VALUES (?,?,?,?, ?)");
$ins3->bind_param("isssi",$T_id,$T_name,$T_pass,$T_email,$T_mobile);

$insC4= $conn->prepare("
INSERT INTO Cousrses (C_id,C_name,teacher_id) VALUES (?, ?,?)");
$insC4->bind_param("isi",$C_id,$C_name,$C_Tid);

$ins5= $conn->prepare("
INSERT INTO grades (student_id,course_id,grade) VALUES (?,?, ?)");
$ins5->bind_param("iis",$G_sid,$G_cid,$G_grade);
/*



/*echo "done";

$sql = "create database FinalProject";
mysqli_query($conn,$sql);
//mysqli_close($conn);

$tab1 = " 
CREATE TABLE admin (
    id  int(1) primary key default 1,
    name varchar(20) not null unique ,
    pass varchar(20) ,
    email varchar(30) unique,
    mobile int (20) ,
    LastVisit varchar(40)
)";
$tab2 = " 
CREATE TABLE students (
    id int(10) not null primary key ,
    name varchar(20) ,
    email varchar(255) not null unique,
    pass varchar(20),
    mobile int (20) ,
    LastVisit varchar(40)

)";
$tab3 = " 
CREATE TABLE teachers (
    id int(10) not null primary key ,
    name varchar(20) ,
    pass varchar(20) ,
    Email varchar(30) unique,
    mobile int (20) ,
    LastVisit varchar(40)

)";
mysqli_query($conn,$tab1);
mysqli_query($conn,$tab2);
mysqli_query($conn,$tab3);
$tab4 = " 
CREATE TABLE Cousrses (
    id int(20)  UNSIGNED AUTO_INCREMENT  PRIMARY KEY ,
    C_name varchar(200),
    teacher_id  int(10)
)";
mysqli_query($conn,$tab4);
/*$tab5 = " 
CREATE TABLE grades (
    student_id int(10)   ,
    course_id   int(20)  ,
    grade varchar(2),
    foreign key (student_id) references students(id),

foreign key (course_id) references Cousrses(id), 
   
PRIMARY KEY (student_id,course_id)


)";



mysqli_query($conn,$tab5);


$ins1 = $conn->prepare("
INSERT INTO admin (id,name,pass,email,mobile) VALUES (?, ?, ?,?,?)");
$ins1->bind_param("isssi",$id,$name,$pass,$email,$mobile);

$ins2 = $conn->prepare("
INSERT INTO students (id,name,email,pass,mobile) VALUES (?, ?, ?,?,?)");
$ins2->bind_param("isssi",$S_id,$S_name,$S_email,$S_pass,$S_mobile);

$ins3= $conn->prepare("
INSERT INTO teachers (id,name,pass,email,mobile) VALUES (?,?,?,?, ?)");
$ins3->bind_param("isssi",$T_id,$T_name,$T_pass,$T_email,$T_mobile);

$insC4= $conn->prepare("
INSERT INTO Cousrses (C_id,C_name,teacher_id) VALUES (?, ?,?)");
$insC4->bind_param("isi",$C_id,$C_name,$C_Tid);

$ins5= $conn->prepare("
INSERT INTO grades (student_id,course_id,grade) VALUES (?,?, ?)");
$ins5->bind_param("iis",$G_sid,$G_cid,$G_grade);

$id= 1;
$name= 'admin';
$pass='123';
$email ='admin@admin.com';
$mobile = 5996324;
$ins1->execute();
$ins1->close();



$S_id= '123';
$S_name= "Bart";
$S_email="bart@fox.com";
$S_pass ="123";
$S_mobile = 5996324;
$ins2->execute();
$S_id= "456";
$S_name= "Milhouse";
$S_email="milhouse@fox.com";
$S_pass ="123";
$S_mobile = 5996324;
$ins2->execute();
$S_id= "888";
$S_name= "Lisa";
$S_email="lisa@fox.com";
$S_pass ="123";
$S_mobile = 5996324;

$ins2->execute();
$S_id= "404";
$S_name= "Ralph";
$S_email="ralph@fox.com";
$S_pass ="123";
$S_mobile = 5996324;

$ins2->execute();
$ins2->close();



$T_id="1234";
$T_name ="Krabappel";
$T_pass ="123";
$T_email ="Krabappel@Krabappel.com";
$T_mobile = 05996324;
$ins3->execute();
$T_id="5678";
$T_name ="Hoover";
$T_pass ="123";
$T_email ="Hoover@Hoover.com";
$T_mobile = 05996324;
$ins3->execute();
$T_id="9012";
$T_name ="Stepp";
$T_pass ="123";
$T_email ="Stepp@Stepp.com";
$T_mobile = 05996324;
$ins3->execute();
$ins3->close();







$G_sid="123";
$G_cid="10001";
$G_grade ="B-";
$ins5->execute();
$G_sid="123";
$G_cid="10002";
$G_grade ="C";
$ins5->execute();
$G_sid="456";
$G_cid="10001";
$G_grade ="B+";
$ins5->execute();
$G_sid="888";
$G_cid="10002";
$G_grade ="A+";
$ins5->execute();
$G_sid="888";
$G_cid="10003";
$G_grade ="A+";
$ins5->execute();
$G_sid="404";
$G_cid="10004";
$G_grade ="D+";
$ins5->execute();
$ins5->close();

$C_id = "10001";
$C_name="Computer Science 142";
$C_Tid="1234";
$insC4->execute();

$C_name="Computer Science 143";
$C_Tid="5678";
$insC4->execute();
$C_name="Computer Science 190M";
$C_Tid="9012";
$insC4->execute();
$C_name="Informatics 100";
$C_Tid="1234";
$insC4->execute();
$insC4->close();



mysqli_close($conn);*/
?>
