<?php
@include 'config.php';
session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}
$user = $_SESSION['user_name'];
$sql = "DELETE FROM text WHERE user = '$user'";
if ($conn -> query($sql) === TRUE){
    echo "idzēsts!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .navigation3 {
   background: rgb(76, 173, 73);
   color:rgb(255, 255, 255);
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
   position:relative; 

}
.navigation3:hover{
   background: rgb(3, 168, 39);
   color:#fff;
}
</style>
<body>
<a href='user_page.php'><button class="navigation3">atpakaļ</button></a>
</body>
</html>