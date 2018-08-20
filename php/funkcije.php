<?php 
include("config.php");
function register($ime, $prezime, $username, $password) {
    global $conn;
    $insert = "INSERT INTO korisnik (ime,prezime,username,password) VALUES (?,?,?,?)";
    $query = $conn->prepare($insert);
    $query->bind_param('ssss',$ime,$prezime,$username,md5($password));
    $query->execute(); 
    $query->close();
}
function login($username, $password){
    global $conn;
    $sql = "SELECT * FROM korisnik WHERE username=? AND password=?";
    $query = $conn->prepare($sql);
    $query->bind_param('ss',$username,md5($password));
    $query->execute();
    $query->store_result();
    if ($query->num_rows > 0) {
        return 1;
    } else{
        return 0;
    } 
    $query->close();
}
?>