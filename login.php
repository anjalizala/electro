<?php
session_start();
include "header.php"; 

if(isset($_SESSION['registration']))
{
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
<?php
    include "dbname.php";
        if(isset($_POST['login']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            if(empty($email))
            {
                ?>
                <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                Email field required......
              </div>
              <?php
                //echo "<p class='error'>Email field Required</p> <br>";
            }
            else if(empty($password))
            {
                //echo "<p class='error'>password field Required</p> <br>";
                ?>
                <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                password field required......
              </div>
              <?php
            }
            else
            {
           // $pass=md5($pass);
            $sql="SELECT * FROM registration WHERE email = '$email'";
            $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res) == 1)
        {
            $row=mysqli_fetch_assoc($res);
            if ( $row['password'] == $password)
            {
              
               $_SESSION['email'] = $row['email'];
               $_SESSION['name'] = $row['name'];
               $_SESSION['id'] = $row['id'];
               //header("Location: index.php");
               echo '<script>window.location="index.php"</script>';
               //exit();
           
              
           }
            else
             {
                   // echo "<p class='error'>Password Does not exist</p> <br>";
                   ?>
                <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                password does not match......
              </div>
              <?php
             }
            
           
        }
        else
        {
           // echo "<p class='error'>Email Does not match</p> <br>";
           ?>
           <div class="alert alert-success alert-dismissible">
           <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           Email does not exist.........
         </div>
         <?php
        }
    }
          
        
        }
    ?>
    <br>
    <center>
    <div class="wrapper"><br><br>
        <h1>Login</h1><br>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" align="center">
        <div class="input-box">
                <input type="text" name="email" placeholder="Email" required>
            </div>
        <div class="input-box">
                <input type="password" name="password" placeholder="password" required>
        </div><br>
            <div class="input-box button">
                <input type="Submit" name="login" value="Login">
            </div><br>
            </form>
    </div>
</center>
<br>
</body>
<?php include "footer.php"?>
</html>
