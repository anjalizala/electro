<?php include "header.php"; ?>


<?php 

    if(isset($_SESSION['add']))
    {
        echo $_SESSION['add'];
        unset($_SESSION['add']);
    }

    if(isset($_SESSION['upload']))
    {
        echo $_SESSION['upload'];
        unset($_SESSION['upload']);
    }

?>

 <!-- Add laptop Form Starts -->
 <!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="./css/style2.css">

</head>

<body>
<center>
        <div class="wrapper">
        <h2>Add Phone</h2>
        <br><br>

 <form action="" method="POST">
 <table>
            <div class="input-box">
                <input type="text"  name="name" placeholder="Phone Name" required>
            </div>
           
            <div class="input-box">
                <input type="text" name="model" placeholder="Model" required>
            </div>
            
           <!-- <div class="input-box">
                <input type="text" name="description" placeholder="Description" required>-->
            </div>
            <div class="input-box">
                <input type="number" name="price" placeholder="Price" required>
            </div>
            <!-- <div class="input-box">
                <input type="file" name="img" placeholder="Image" required>
            </div> -->
           <!-- <div class="input-box">
                <input type="number" name="qty" placeholder="Quantity" required>
            </div>-->
            <div class="input-box button">
                <input type="Submit" name="submit" value="ADD">
            </div>
           
        </table>
</div>
</center>

<?php
include 'dbname.php';

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$model=$_POST['model'];
    $price=$_POST['price'];
    //$img=$_POST['img'];


    // if(isset($_FILES['img']['name']))
    // {
    //     //Upload the Image
    //     //To upload image we need image name, source path and destination path
    //     $img = $_FILES['img']['name'];
        
    //     // Upload the Image only if image is selected
    //     if($img != "")
    //     {

    //         //Auto Rename our Image
    //         //Get the Extension of our image (jpg, png, gif, etc) e.g. "specialfood1.jpg"
    //         $ext = end(explode('.', $img));

    //         //Rename the Image
    //         $img = "laptop".rand(000, 999).'.'.$ext; // e.g. Food_Category_834.jpg
            

    //         $source_path = $_FILES['img']['tmp_name'];

    //         $destination_path = "../img".$img;

    //         //Finally Upload the Image
    //         $upload = move_uploaded_file($source_path, $destination_path);

    //         //Check whether the image is uploaded or not
    //         //And if the image is not uploaded then we will stop the process and redirect with error message
    //         if($upload==false)
    //         {
    //             //SEt message
    //             $_SESSION['upload'] = "<div class='error'>Failed to Upload Image. </div>";
    //             //Redirect to Add CAtegory Page
    //             header('location:'.SITEURL.'add-laptop.php');
    //             //STop the Process
    //             die();
    //         }

    //     }
    // }
    // else
    // {
    //     //Don't Upload Image and set the image_name value as blank
    //     $img="";
    // }

// echo '<script>window.location="laptop.php"</script>';
$sql = "INSERT INTO phone (name, model, price)
VALUES ('$name','$model',$price)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>




<br><br>
<?php include "footer.php"; ?>
</body>
<html>