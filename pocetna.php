<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="slike/favicon.jpg" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body background="https://static1.squarespace.com/static/52da9677e4b03d314575985a/t/5869498ebe65940ffdf8bac9/1483295120944/Only+Hotels+with+Views+Background.jpg?format=1500w">

<div class="topnav">
 
              <nav class="navbar navbar-expand-lg navbar-light bg-light  navigation">
                    <a class="navbar-brand  active ac" href="pocetna.php">Početna</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="onama.php">O nama</a>
                        </li>
                    
                      
                     <?php
                     if (isset($_SESSION['username'])){ 
                     ?>
                        <li class="nav-item">
                           <a class="nav-link" href="logout.php">Logout <?php echo $_SESSION['username']?></a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                           <a class="nav-link" href="login.php">Login</a>
                        </li>
                    <?php }?>
                        </ul>
                    </div>
                  </nav> 
				  
</div>
<br>
<div style="padding-left:16px">
	<img src="https://s-ec.bstatic.com/images/hotel/max1280x900/112/112107707.jpg" class="center"><br>
  <h2><center>Welcome to our HOTEL!!</center></h2>
  <p><center>The Central Hotel is a smaller four-star business hotel, which offers excellent location and full comfort. <br>
  The hotel is only a step away from the main bus and railway stations. The sights of Ljubljana and the old city centre are accessible on foot.<br>
  The hotel has 71 comfortable rooms and 3 suites. If you travel by car you can use the parking garage in close vicinity of the hotel.</center></p>
</div>

</body>
</html>