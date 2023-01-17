<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$bd = "shop_bd";

$conn = mysqli_connect($hostname,$username,$password,null,4306)
or die ("Eroare! Functia apelata da eroare, este posbil ca cei 3 parametrii sa fie completati eronat!");

$baza_date = mysqli_select_db($conn,$bd)
or die ("Eroare! Numele aceste baze de date nu exista!");
?>


