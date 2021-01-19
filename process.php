<?php
   $login = $_POST['login'];
   $name = $_POST['name'];
   $pass = $_POST['pass'];

   if(mb_strlen($login) <5 || mb_strlen($login) >90){
       echo "Zła długość logina";
       exit();
   } else if(mb_strlen($name) <3 || mb_strlen($login) >50) {
       echo "Zła długość imienia";
       exit();
   } else if(mb_strlen($pass) <2 || mb_strlen($login) >10) {
    echo "Zła długość hasłą (od 2 do 10 symboli)";
    exit();
   }
   $pass = md5($pass);
   $mysql = mysqli_connect("localhost", "masza1", "rfrfirf", "projektphp");
   $mysql->query("INSERT INTO `autoryzacja` (`login`, `name`, `pass`) VALUES('$login', '$name', '$pass')");
   $mysql->close();
   header('Location: index.php');
?>