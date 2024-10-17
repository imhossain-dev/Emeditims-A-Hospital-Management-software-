<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/mystyle.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="css/contact.css"> -->
	<meta charset="utf-8">
  <link rel="icon" type="text/css" href="image/icon.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EMEDS</title>

</head>

<body>

<div class="Banner-area">
	<header>
    <a href="index.php" class="logo">Emeds</a>

    <div class="search">
    <form name="searchBox" action="search.php" method="post">
      <input class="search" id="searchBox" placeholder="Search.." type="text">

      <input class="search" type="submit" name="search" id="" value="Search">
    </form>
    </div>

 <nav>
   		<li><a href="about.php">HELP&MORE</a></li>
    <?php 
    session_start();
    if (isset($_SESSION['email'])||isset($_SESSION['admin'])) {
        ?>
        <li><a href="logout.php">Logout</a></li>
        <?php
    }else{
    ?>
      <li><a href="login.php">Login</a></li>
      <?php
    }
    ?>
</nav>
</div>
</header>