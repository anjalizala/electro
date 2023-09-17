<?php
session_start();
$duration=2*60;
$_SESSION["email"]="";
$_SESSION["password"]="";
$_SESSION["time"]=0;
$name=$_POST["email"];
$password=$_POST["password"];
function sessionlogin($email,$password,$duration)
{
if($email==$_SESSION["email"] && $password==$_SESSION["password"])
{
	if(isset($_SESSION["time"]) && $_SESSION["time"]+$duration<=time())
	{
		$_SESSION["time"]=time();
		echo "session login successful";
	}
	else
	{
        session_destroy();
		echo "session expired";
	}
}
else
{
	echo "invalid login";
}
}
sessionlogin($email,$password,$duration);

?>