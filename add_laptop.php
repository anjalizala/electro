<?php include "header.php"; ?>

 <!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="./css/style2.css">
    <style>
        input[type=file]::file-selector-button {
        margin-right: ;
        border: none;
        margin-top: 5px;
        margin-left: 1px;
        margin-bottom: 5px;
        background: #D10024;
        padding: 10px 20px;
        border-radius: 10px;
        color: #fff;
        cursor: pointer;
        transition: background .2s ease-in-out;
        }

        input[type=file]::file-selector-button:hover {
        background: #D10024;
        }
    </style>
</head>

<body>
    <br>
<center>
        <div class="wrapper">
        <h2>Add Laptop</h2>
        

 <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
 <table>
            <div class="input-box">
                <input type="text"  name="id" placeholder="id">
            </div>

            <div class="input-box">
                <input type="text"  name="name" placeholder="Name" >
            </div>
           
            <div class="input-box">
                <input type="text" name="model" placeholder="Model" >
            </div>
            
           <!-- <div class="input-box">
                <input type="text" name="description" placeholder="Description" required>-->
            </div>
            <div class="input-box">
                <input type="number" name="price" placeholder="Price" >
            </div>
            <label for="input-box">Description</label>
            <textarea id="desc" name="des" rows="4" cols="50">
            </textarea>
            <div class="input-box">
                <input type="file" name="img" placeholder="Image" required>
            </div>
           
            <div class="row">
            <div class="col-md-4">
                <div class="input-box button">
                    <input type="Submit" name="add" value="ADD">     
                </div>

            </div>
            <div class="col-md-4">
                <div class="input-box button">
                     <input type="Submit" name="edit" value="EDIT">
                </div>
            </div>
            <div class="col-md-4">
                <div class="input-box button">
                    <input type="Submit" name="delete" value="DELETE">
                </div>
            </div>
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