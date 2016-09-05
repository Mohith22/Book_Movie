<?php
// Start the session
session_start();
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
      <li class="active"><a href="admin.php">Home</a></li>
      <li><a href="add.php">Add Movie</a></li> 
      <li><a href="remove.php">Remove Movie</a></li> 
      <li><a href="status.php">Check Status</a></li> 
      <li><a href="login.php">LogOut</a></li>
    </ul>
  </div>
</nav>
 </div>  
 <br>
 <br>
 <br>
 <br>

  <p class="about"> Welcome  <?php  echo $_SESSION['admin']; ?>!</p> 
  
  <br>
  <br>

  <p class="about1" > Offers showtimes, movie tickets, concert tickets and events calendar. Also features movie reviews, promotional offers and mobile applications.  Book Your Movie is an online ticketing facility like Movietickets.com and Ticketmaster.com. BookMyShow took the primary services provided by these two websites and consolidated it into one website for movies, plays, events and sports tickets. Apart from being an online ticketing portal, BookMyShow offers information about upcoming movies and events, show timings, venue details and artist bios.BookMyShow occupies 85 to 90 percent of the online entertainment-ticketing market; 70 percent of its sales comes from movie tickets and the remaining from sports, plays and live events. At present, sports accounts for almost 20 percent of its revenues and is seen as a future growth area.  The website gets 1 billion page views, 50 million visits, it sells 6 million (60 lakh) tickets a month and has sold $269.7 million (Rs.1,700 crore) worth of tickets as of March 2015.</p>


  


 
    </body>

</html>