<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profils</title>


   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="container">
<style>

   .navigation {
   background: rgb(76, 173, 73);
   color:rgb(255, 255, 255);
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
   position:relative; 
   left:-50px; 
   top:30px;
}
.navigation:hover{
   background: rgb(3, 168, 39);
   color:#fff;
}
.navigation1 {
   background: rgb(76, 173, 73);
   color:rgb(255, 255, 255);
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
   position:relative; 
   left:30px; 
   top:30px;
}
.navigation1:hover{
   background: rgb(3, 168, 39);
   color:#fff;
}
</style>
   <div class="content">
      <h1>Sveicināts <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>profils</p>
      <a href="logout.php" class="navigation">logout</a>
      <a href="user_page.php" class="navigation1">saraksts</a>

   </div>

</div>

</body>
</html>