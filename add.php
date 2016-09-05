<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("book_movie", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$id = $_POST['id'];
$name = $_POST['name'];
$type = $_POST['type'];
$tick_cost = $_POST['tick_cost'];
if($id !=''||$name !=''||$type !=''||$tick_cost !=''){
//Insert Query of SQL
$query = mysql_query("insert into movies(movie_id, movie_name, movie_type, movie_cost) values ('$id', '$name', '$type', '$tick_cost')");
echo "<br/><br/> <br/><br/> <br/><br/> <br/><br/><p>Data Inserted successfully...!!</p>";
}
else{
echo "<br/><br/><br/><br/><br/><br/><br/><br/><p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title> BOOK YOUR MOVIE ! </title>
   <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- jQuery 1.11.1 (Compatible with countdown timer - DO NOT change order of scripts) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style_sheet.css">
   <link rel="icon" type="image/jpg" sizes="16x16" href="images/logo.jpg">


  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">BOOK YOUR MOVIE</a>
    </div>

    <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
      <li><a href="admin.php">Home</a></li>
      <li class="active"><a href="add.php">Add Movie</a></li> 
      <li><a href="remove.php">Remove Movie</a></li> 
      <li><a href="status.php">Check Status</a></li> 
      <li><a href="login.php">Log Out</a></li> 
    </ul>
  </div>
</nav>
 </div>  
 <br>
 <br>
 <br>
 <br>

  <p class="about"> Welcome <?php session_start(); echo $_SESSION['admin']; ?> !</p>
  <br>
  <br>
  
  <p class="about1" align="center">------------ Add A Movie ------------</p>
  <form role="form" action="add.php" method="post">  
  <div class="form-group">
    <label for="id">Movie ID(Unique):</label>
    <input type="number" class="form-control" name="id">
  </div>
  <div class="form-group">
    <label for="name">Movie Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="type">Movie Type:</label>
    <input type="text" class="form-control" name="type">
  </div>
    <div class="form-group">
    <label for="type">Ticket Cost:</label>
    <input type="number" class="form-control" name="tick_cost">
  </div>
  <button type="submit" class="btn btn-default" name="submit">Add Movie</button>
</form>

  


 
    </body>

</html>

