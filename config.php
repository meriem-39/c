<?php
$con= mysqli_connect('localhost','root','','online');
if(!$con){
    die('Error'.mysqli_connect_error());
}else{
    echo 'good';
}

?>
