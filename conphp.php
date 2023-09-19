<?php
include "dbname.php";
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$message=$_POST['message'];
$sql="INSERT INTO contact(name,email,contact,message) VALUES('$name','$email',$contact,'$message')";
$q=mysqli_query($conn,$sql);
if(!$q)
{
    echo '<br><br><div class="alert alert-danger alert-dismissible">'.
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
            'Can not sent message...'.
          '</div>';
}
else{
    echo '<br><br><div class="alert alert-success alert-dismissible">'.
            '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
            'Message sent Successfully...'.
          '</div>';
}
mysqli_close($conn);
?>