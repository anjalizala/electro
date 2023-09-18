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
        <h2>Add Product</h2>
        <br>

 <form action="" method="POST">
 <table>
            <div class="input-box">
                <input type="text"  name="name" placeholder="Laptop Name" required>
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
    $img=$_POST['img'];
    //for file upload
$target_dir="img/"; //for image upload in which folder

$target_file=$target_dir . basename($_FILES["img"] ["name"]) ; //which file upload from form and where
//echo "$target_file";

$imageFileType=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(move_uploaded_file($_FILES["img"] ["tmp_name"],$target_file))
{
    $img=$target_file;
    $sql="INSERT INTO laptop VALUES (NULL,'$name','$model',$price,'$image_name')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        echo"record inserted";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
   

// echo '<script>window.location="laptop.php"</script>';
// $sql = "INSERT INTO laptop (name, model, price)
// VALUES ('$name','$model',$price)";

// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

mysqli_close($conn);
?>

<br><br>
<?php include "footer.php"; ?>
</body>
<html>