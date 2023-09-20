<?php

session_start();
include "header.php";
if(isset($_SESSION['login']))
{
    header("location:dashbord.php");

}?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style2.css">

</head>



<body>
<center>
    <div class="wrapper">
        <h2>Login</h2>
        <form action="<?php //echo $_SERVER['PHP_SELF'];?>" align="center" method="POST">
        <table>
            <div class="input-box">
                <input type="text" name="username" placeholder="User Name" >
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" >
            </div>
            <div class="input-box button">
                <input type="Submit" name="submit" value="Login">
            </div>
        </table>
        </form>
    </div>
</center>

<?php
    include "dbname.php";
        if(isset($_POST['submit']))
        {
            $username = $_POST["username"];
            $password = $_POST['password'];

            $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

            $res = mysqli_query($conn, $sql);

            $count = mysqli_num_rows($res);

            if($count==1)
            {
                //User AVailable and Login Success
                $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
                $_SESSION['user'] = $username; //TO check whether the user is logged in or not and logout will unset it
    
                //REdirect to HOme Page/Dashboard
                header('location:'.SITEURL.'admin/');
            }
            else
            {
                //User not Available and Login FAil
                $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
                //REdirect to HOme Page/Dashboard
                header('location:'.SITEURL.'admin/login.php');
            }
        }
          
    


//             if(empty($email))
//             {
//                 ?>
<!-- //                 <div class="alert alert-danger alert-dismissible">
//                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//                 Email field required......
//               </div> -->
//               <?php
//                 //echo "<p class='error'>Email field Required</p> <br>";
//             }
//             else if(empty($password))
//             {
//                 //echo "<p class='error'>password field Required</p> <br>";
//                 ?>
<!-- //                 <div class="alert alert-danger alert-dismissible">
//                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//                 password field required......
//               </div> -->
//               <?php
//             }
//             else
//             {
//            // $pass=md5($pass);
//             $sql="SELECT * FROM registration WHERE email = '$email'";
//             $res=mysqli_query($conn,$sql);
//         if(mysqli_num_rows($res) == 1)
//         {
//             $row=mysqli_fetch_assoc($res);
//             if ( $row['password'] == $password)
//             {
              
//                $_SESSION['email'] = $row['email'];
//                $_SESSION['name'] = $row['name'];
//                //header("Location: index.php");
//                //exit();
//                echo '<script>window.location="index.php"</script>';
           
              
//            }
//             else
//              {
//                    // echo "<p class='error'>Password Does not exist</p> <br>";
//                    ?>
<!-- //                 <div class="alert alert-danger alert-dismissible">
//                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//                 password does not match......
//               </div> -->
//               <?php
//              }
            
           
//         }
//         else
//         {
//            // echo "<p class='error'>Email Does not match</p> <br>";
//            ?>
<!-- //            <div class="alert alert-danger alert-dismissible">
//            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
//            Email does not exist......... -->
<!-- //          </div> -->
//          <?php
//         }
//     }
          
        
//         }
//     

?>

   
</body>
<?php include "footer.php"; ?>

</html>
