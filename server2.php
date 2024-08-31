<?php

$uname=$_POST['username'];
$upass=$_POST['password'];
//$utype=$_POST{'usertype'};

$conn=new mysqli("localhost","root","","acmegrade",3306);

$sql_status=mysqli_query($conn,"insert into user(username,password,usertype) value('$uname','$upass','$_POST[usertype]')");

if($sql_status){
    echo"signup is successfull";
}
else{
    echo "Error while inserting";
    echo mysqli_error($conn);
}

?>