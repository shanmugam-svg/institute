<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    



$link=mysqli_connect('localhost','root','','ai');
if(!$link){
    die('Connection error'.mysqli_connect_error());
}

$query="DELETE FROM win WHERE id=$id";
$result=mysqli_query($link,$query);
if($result){
    echo 'successfully deleted.<a href="index.php">Go Back</a>';
}else{
    echo 'error while deleting the record';
}

}


?>