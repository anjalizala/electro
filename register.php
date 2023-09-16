<?php include "header.php" ?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style2.css">

</head>

<body>
    <br>
    <center>
    <div class="wrapper">
        <h2>Registration</h2>
        <form action="<?php $_SERVER["PHP_SELF"]?>" align="center" method="POST">
        <table>
            <div class="input-box">
                <input type="text"  name="name" placeholder="Full Name" required>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="phone" name="phone" placeholder="Phone Number" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
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
<?php
include "dbname.php"; 
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $moblieno=$_POST['phone'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $sql="INSERT INTO registration(name,email,mobileno,address,password) VALUES('$name','$email',$moblieno,'$address','$password')";
    $q=(mysqli_query($conn,$sql));
    if(!$q)
        {
            echo "data not inserted<br>";
        }
    else
    {
        echo '<script>Window.location="login.php"</script>';
    }
        mysqli_close($conn);


} 
?>
</body>
<?php include "footer.php"?>
</html>