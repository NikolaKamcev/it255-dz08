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

    <form action="register.php" method="POST" class="col-md-4">
         <div class="form-group">
          <label for="exampleInputEmail1">Ime</label>
             <input type="text" class="form-control" name="ime" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ime">
            
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Prezime</label>
             <input type="text" class="form-control" name="prezime" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Prezime">
            
         </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
             <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
             <small id="emailHelp" class="form-text text-muted"></small>
         </div>
        <div class="form-group">
         <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
      
            <button  type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<div class="container-fluid poruka2" style="height:5rem;color:red">

<?php
include("php/funkcije.php");
 
if(isset($_POST['submit'])){
    
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(!empty($ime) && !empty($prezime) && !empty($username) && !empty($password)){
        register($ime,$prezime,$username,$password);
       
        echo "Uspešna registracija";
        header("Location: login.php");
       } else {
          
       
        
         echo "* Morate popuniti sva polja *";
       
      }
  }
         
 
    ?> 

</div>
    
 
    </body>
</html>
   