<?php
//polaczenie z mysql
$con = mysqli_connect("localhost", "masza1", "rfrfirf", "projektphp");
//test polaczenia
if(mysqli_connect_errno()){
    echo "nie mozna polaczyc sie z baza danych: " . $mysqli_connect_error();
}

?>