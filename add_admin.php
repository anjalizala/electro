
<?php

session_start();
include "header.php";
if(isset($_SESSION['login']))
{
    //header("location:dashbord.php");

}?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style2.css">

</head>



<body>



        <?php 
            // if(isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
            // {
            //     echo $_SESSION['add']; //Display the SEssion Message if SEt
            //     unset($_SESSION['add']); //Remove Session Message
            // }
        ?>

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

<?php include "dbname.php"; ?>


<?php 
    //Process the Value from Form and Save it in Database

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        // Button Clicked
        //echo "Button Clicked";

        //1. Get the Data from form
        //$full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = $_POST['password']; //Password Encryption with MD5

        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO admin (username,password) VALUES ('$username' , '$password')";
            
 
        //3. Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql);

        //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
        // if($res==TRUE)
        // {
        //     //Data Inserted
        //     //echo "Data Inserted";
        //     //Create a Session Variable to Display Message
        //     $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
        //     //Redirect Page to Manage Admin
        //     //header("location:".SITEURL.'admin/manage-admin.php');
        //    // echo '<script>window.location="../admin/manage-admin.php"</script>';
        // }
        // else
        // {
        //     //FAiled to Insert DAta
        //     //echo "Faile to Insert Data";
        //     //Create a Session Variable to Display Message
        //     $_SESSION['add'] = "<div class='error'>Failed to Add Admin.</div>";
        //     //Redirect Page to Add Admin
        //     //header("location:".SITEURL.'admin/add-admin.php');
        //    // echo '<script>window.location="../admin/add-admin.php"</script>';
        // }
        if (mysqli_query($conn, $sql)) 
        {

            echo '<br><br><div class="alert alert-success alert-dismissible">'.
            '<a href="dashbord.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
            'Admin Inserted Successfully...'.
          '</div>';
            
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }
    
?>
</body>
<?php include "footer.php"; ?>
</html>
