<?php 
session_start();
include "header.php";
if(isset($_SESSION['registration']))
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style2.css">

</head>

<body>
    
<?php
include "dbname.php"; 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $error=array();

    if(empty($name) OR empty($password) OR empty($cpassword) OR empty($email) )
    {
        array_push($error,"All fields are required");
    }
    if (!preg_match ("/^[a-zA-z]*$/", $name) ) {  
        array_push($error,"Only characters and whitespace are allowed.");    
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        array_push($error,"Email is Not Valid");
    }
    if(strlen($password)<8)
    {
        array_push($error,"Password must be atleast 8 characters");
    }
    if($password != $cpassword)
    {
        array_push($error,"Password does not match");
    }

    $sql="SELECT * FROM registration WHERE email = '$email'";
    $res=mysqli_query($conn,$sql);
    $ror_count=mysqli_num_rows($res);
    if($ror_count>0)
    {
        array_push($error,"Email Already exist..");
    }
    if(count($error)>0)
    {
        foreach($error as $error)
        {   ?>
            <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php
            echo $error;
            ?>
          </div>
          <?php
        }
        
    }
     

else
{
   
   // $cpassword=$_POST['cpassword'];
    $sql1="INSERT INTO registration VALUES(NULL,'$name','$email',$phone,'$address','$password')";
    $res1=mysqli_query($conn,$sql1);
    //header('location:login.php');
    echo '<script>window.location="login.php"</script>';
}
}
?>

<!--html-->
<br>
    <center>
    <div class="wrapper">
        <h2>Registration</h2>
        <form action="<?php //echo $_SERVER['PHP_SELF'];?>" align="center" method="POST">
        <table>
            <div class="input-box">
                <input type="text"  name="name" placeholder="Full Name" required>
            </div>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="number" name="phone" placeholder="Phone Number" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
            </div>
            <div class="input-box">
                <input type="text" name="address" placeholder="Address Line 1" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Create password" required>
            </div>
            <div class="input-box">
                <input type="password" name="cpassword" placeholder="Confirm password" required>
            </div>
            <div class="policy">
                <input type="checkbox" required>
                <h3><br>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input type="Submit" name="submit" value="Register Now">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="login.php">Login now</a></h3>
            </div>
        </table>
        </form>
    </div>
</center>
<br>



</body>
<?php include "footer.php"?>
</html>