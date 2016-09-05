

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
      <li><a href="user.php">Home</a></li>
      <li class="active"><a href="buy.php">Buy Ticket</a></li> 
      <li><a href="cancel.php">Cancel Ticket</a></li> 
      <li><a href="cart.php">Cart</a></li> 
      <li><a href="login.php">Log Out</a></li> 
    </ul>
  </div>
</nav>
 </div>  
 <br>
 <br>
 <br>
 <br>


  <p class="about">Welcome <?php session_start(); echo $_SESSION['username']; ?></p>
   <div class="container">
  <h2>INOX</h2>
             
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("book_movie", $connection); // Selecting Database from Server



$result = mysql_query("SELECT * FROM movies") or die('Unable to run query:');

$counter = mysql_num_rows($result);

if ($counter > 0) {

echo "<table class='table'>";
echo " <thead>";
echo "<tr>";
echo "<th>Movie ID</th>";
echo "<th>Movie Name</th>";
echo "<th>Movie Type</th>";
echo "<th>Ticket Cost</th>";
echo "</tr>";
echo " </thead>";

while ($row = mysql_fetch_array($result)) {
    echo " <tbody>";
    echo "<tr>";
    echo "<td>" . $row['movie_id'] . "</td>";
    echo "<td>" . $row['movie_name'] . "</td>";
    echo "<td>" . $row['movie_type'] . "</td>";
    echo "<td>" . $row['movie_cost'] . "</td>";
    echo "</tr>";
    echo " </tbody>\n";
}
echo "</table>";
}

mysql_close($connection);
?>
</div>

  <p class="about1" align="center">------------ Buy Ticket ------------</p>

  <form role="form" action="buy1.php" method="post"> 
    <div class="form-group">
    <label for="type">Ticket Cost(Less than):</label>
    <input type="number" class="form-control" name="tick_cost_min">
  </div>
  <button type="submit" class="btn btn-default" name="submit">Find Movies</button>
  </form>
<br>
<br>
<br>
   <form role="form" action="buy2.php" method="post"> 
    <div class="form-group">
    <label for="type">Movie Type</label>
    <input type="text" class="form-control" name="type">
  </div>
  <button type="submit" class="btn btn-default" name="submit">Find Movies</button>
  </form>
<br>
<br>
<br>
  <form role="form" action="buy.php" method="post">  
  <div class="form-group">
    <label for="id">Movie ID(Unique):</label>
    <input type="number" class="form-control" name="id">
  </div>
    <div class="form-group">
    <label for="type">Number Of Tickets:</label>
    <input type="number" class="form-control" name="tick_num">
  </div>
<div class="form-group">
  <label for="sel1">Show Timings:</label>
  <select class="form-control" id="time" name="time">
    <option>Fans Show</option>
    <option>Morning Show</option>
    <option>Matnee Show</option>
    <option>First Show</option>
    <option>Second Show</option>
  </select>
</div>
  <button type="submit" class="btn btn-default" name="submit">Buy Ticket</button>
</form>

  <br>
  <br>
  <br>

<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("book_movie", $connection); // Selecting Database from Server
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$id = $_POST['id'];session_start();
$num = $_POST['tick_num'];
$time = $_POST['time'];
if($id !=''||$username !=''||$num !='' ||$time !=''){
//Insert Query of SQL
session_start();
  
$query = mysql_query("insert into user(UserName, movie_id, ticket_count,time) values ('{$_SESSION['username']}', '$id', '$num', '$time')");
echo "<br/><br/> <br/><br/> <br/><br/> <br/><br/><p>Data Inserted successfully...!!</p>";
}
else{
echo "<br/><br/><br/><br/><br/><br/><br/><br/><p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>


 
    </body>

</html>

