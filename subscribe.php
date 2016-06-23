<?php

//学号
$no = $_POST['sno'];
//邮箱
$email = $_POST['email'];

include_once "Mysql.php";

//插入数据库
$mysql = new Mysql();
$sql = "update student set s_mail='$email' WHERE s_no=$no";
$mysql->Update($sql);


//echo "no:" . $no . " email:" . $email;

include_once "sendMail.php";
sendemail($no,$email);