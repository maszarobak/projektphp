<?php 
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $pass = md5($pass);
    $mysql = mysqli_connect("localhost", "masza1", "rfrfirf", "projektphp");
    $result=$mysql->query("SELECT * FROM `autoryzacja` WHERE `login`='$login' AND `pass`='$pass'");
    $user=$result->fetch_assoc();
    if(count($user)==0){
        echo "Użytkownik nie istnieje";
        exit();
    }
    
    setcookie('user', $user['name'], time()+3600, "/");
   
    
    $mysql->close();
    header('Location: index.php');
?>