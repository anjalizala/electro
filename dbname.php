<?php
$host="localhost";
$user="root";
$password="";
$dbname="electro";
$conn=mysqli_connect($host,$user,$password,$dbname);
if(!$conn)
{
    die ("Connection not successfully".mysqli_connect_error());
}
else
{
    echo "Connection successfully";
}
?>