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

<img class="center" src="https://travelji.com/wp-content/uploads/Hotel-Tips.jpg">

<center> U.S. Hotel and Resort Management, Inc. is a wholly-owned subsidiary of The Ramkota Companies, Inc. and is the general partner of limited partnerships that own hotels or have concession agreements involving lodging, food and beverage, and related resort activities.

The first partnership was formed to acquire a high-rise hotel in downtown Bismarck, ND, and that partnership later expanded to acquire a second hotel in Bismarck.  In similar fashion, partnerships were formed to acquire hotels in Casper, WY; Fayetteville, AR; Tulsa, OK; Plymouth, MN, which was expanded to acquire a resort in Alexandria, MN; Traverse City, MI; Carefree, AZ; Fargo, ND; and Muncie, IN.  Most recently, a partnership was formed to be the concessionaire for Custer State Park in South Dakota.  U.S. Hotel and Resort Management, Inc. has access to both equity and debt capital to better position the properties for success.

U.S. Hotel and Resort Management, Inc. is an investment vehicle that provides captial for the acquisition and/or leasing of quality hospitality real estate.</center>
<br>

<h1> <center> Contact us </h1>

<h2> <center> 066 521 843 </h2>
<h2> <center> metHotelI@gmail.com </h2>
    
     
</body>
</html>