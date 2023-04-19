<?php

@include 'config.php';
session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

if(isset($_POST['submit'])){

   $user = $_SESSION['user_name'];
   $text = mysqli_real_escape_string($conn, $_POST['text']);
   

   $select = " SELECT * FROM text WHERE user = '$user' && text = '$text' ";


   
   $insert = "INSERT INTO text(user, text) VALUES('$user','$text')";
   mysqli_query($conn, $insert);

 

   if (isset($_GET['del'])) {
      $id = $_GET['del'];
      $query = "DELETE FROM text WHERE id = $id";
      mysqli_query($link, $query) or die(mysqli_error($link));
   }

};


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Darāmo lietu saraksts</title>
   <link rel="stylesheet" href="style.css">
 
</head>
<body>
<div class="form-container">

   <form action="" method="post">
      <h3>Darāmo lietu saraksts</h3>
      <input type="text" name="text" required placeholder="pievienot uzdevumu">
      <input type="submit" name="submit" value="pievienot" class="form-btn">
  </form>
   </form>
   <style>

table * {
   border: ridge Green;
   padding: 0.5rem;
   left: 200px;
}
table {
   margin: 20px;
   box-shadow: 0 0 6px 3px Green;
   empty-cells: show;
   position:absolute; 
   left:0px; 
   top:450px;
}
.navigation {
   background: rgb(76, 173, 73);
   color:rgb(255, 255, 255);
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
   position:relative; 
   left:-300px; 
   top:135px;
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
   left:-450px; 
   top:135px;
}
.navigation1:hover{
   background: rgb(3, 168, 39);
   color:#fff;
}
.navigation2 {
   background: rgb(76, 173, 73);
   color:rgb(255, 255, 255);
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
   position:relative; 
   left:-350px; 
   top:135px;
}
.navigation2:hover{
   background: rgb(3, 168, 39);
   color:#fff;
}
</style>
<div id = "table"> 
   <?php
   $conn = new mysqli("localhost:3308", "root", "", "todolist");
   $user = $_SESSION['user_name'];
$sql = "SELECT * FROM text WHERE user = '$user'";
if($result = $conn->query($sql)){
    echo "<table><tr><th>Darāmās lietas:</th></tr>";
    foreach($result as $row){

      echo "<tr>";
      echo "<td>" . $row["text"] . "</td>";     
      echo "</tr>";
       
        
    }
    echo "</table>";
    $result->free();
} 
$conn->close();
?>
</table>
</form>
</div>
      
<a href='logout.php'><button class="navigation">iziet</button></a>
<a href='profile.php'><button class="navigation1">profils</button></a>
<a href='delete.php'><button class="navigation2">izdzēst visu</button></a>

</div>
</html>

