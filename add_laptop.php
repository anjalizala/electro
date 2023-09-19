<?php include "header.php"; ?>

 <!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="./css/style2.css">

</head>

<body>
    <br>
<center>
        <div class="wrapper">
        <h2>Add Laptop</h2>
        <br>

 <form action="" method="POST">
 <table>
            <div class="input-box">
                <input type="text"  name="name" placeholder="Name" required>
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
            <div class="input-box">
                <input type="file" name="img" placeholder="Image" required>
            </div>
           
            <div class="input-box button">
                <input type="Submit" name="submit" value="ADD">
               <!-- <input type="Submit" name="edit" value="EDIT">-->
            </div>
           
        </table>
</div>
</center>


<?php
// Database connection
 include "dbname.php";
 if (isset($_POST['submit'])) 
 {
     $name=$_POST['name'];
     $model=$_POST['model'];
     $price=$_POST['price'];
    
     
     // File upload
     $target_dir = "images/";
     $target_file = $target_dir . basename($_FILES["image"]["name"]);
     $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
     
     if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
     {
         $image = $target_file;
         // Insert data into the database
         $sql = "INSERT INTO phone (name, model, price , image) VALUES ('$name', '$model', $price , '$image')";
         
         if (mysqli_query($conn, $sql)) 
         {
 
             echo '<br><br><div class="alert alert-success alert-dismissible">'.
             '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.
             'Product Inserted Successfully...'.
           '</div>';
             
         } 
         else 
         {
             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
     } 
     else 
     {
         echo "Error uploading the image.";
     }
 }
 mysqli_close($conn);
?>

<br><br>
<?php include "footer.php"; ?>
</body>
<html>