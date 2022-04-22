<?php 
$host = 'loxalhost';
$db = 'despot';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
    ];
    
    try{
        $connect = new PDO($dsn, $user, $pass, $opt);
        echo "verbinding";
    }
    catch(PDOException $e){
        echo $e->getmessage();
        die("geen verbinding");
    }
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/projectsheet.CSS">
    <link rel="stylesheet" href="js/projectjs.js">
    <title>Ons menu</title>
</head>





</html>