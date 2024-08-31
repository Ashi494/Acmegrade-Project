<?php

if(!isset($_SESSION["login_status"])){
    echo "Login is Skipped";
    die;
}
if($_SESSION["login_status"]==false){
    echo "Unauthorized Attempt";
    die;
}

if($_SESSION["usertype"]!="Coustomer"){
    echo "Fobidden Access";
    die;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Wellcome To Coustomer Home </h1>
</body>
</html>