<?php
$mysqlhostname = "172.16.3.10";
$mysqlport = "3306";
$mysqlusername = "Bravo4Fun";
$mysqlpassword = "conexao";
$mysqldatabase = "Bravo4Fun";

//mostra string de conexao ao MySql
$dsn = 'mysql:host=' . $mysqlhostname . ";dbname=" . $mysqldatabase . ';port=' . $mysqlport;
$pdo = new PDO($dsn, $mysqlusername, $mysqlpassword);
?>