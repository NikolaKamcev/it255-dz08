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


<div class="container-fluid">
<label for="exampleInputEmail1">Ukoliko nemate nalog, možete se <a href="register.php">registrovati ovde</a></label>
    <form action="login.php" method="POST" class="col-md-4">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
             <input type="username" class="form-control" name = "username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
             <small id="emailHelp" class="form-text text-muted">Nikada nećemo podeliti Vaše lične podatke.</small>
         </div>
        <div class="form-group">
         <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name = "password" id="exampleInputPassword1" placeholder="Password">
        </div>
      
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

</div>



<div class="container-fluid poruka1">

<?php 
session_start();
include("php/funkcije.php");
if(isset($_POST['submit'])){
    
    $username =  $conn->real_escape_string($_POST['username']); 
    $password = $_POST['password'];
    if(!empty($username) && !empty($password)){
        if(login($username,$password)){
            $_SESSION['username'] = $username; 
            header("Location: pocetna.php");
        } else{
            echo "* Pogresan username ili password *";
        }
    } else{
        echo "* Morate uneti sve podatke *";
        
    }
}
?>

</div>     
    
     
</body>
</html>