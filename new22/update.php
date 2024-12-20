<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $id=$_POST['id'];

}

$link=mysqli_connect('localhost','root','','ai');
if(!$link){
    die('Connection error'.mysqli_connect_error());
}

$query="UPDATE `win` SET `name`='$name',`mobile`='$mobile',`address`='$address' WHERE id=$id";
$result=mysqli_query($link,$query);
if($result){
    echo 'successfully inserted.<a href="index.php">Go Back</a>';
}else{
    echo 'error while inserting the record';
}


?>