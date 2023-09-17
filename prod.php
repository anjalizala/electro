<?php include('header.php'); ?>


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

 <!-- Add Product Form Starts -->
 <!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="style2.css">

</head>

<body>
<center>
        <div class="wrapper">
        <h2>Add Product</h2>
        <br><br>

 <form action="" method="POST">
 <table>
            <div class="input-box">
                <input type="text"  name="name" placeholder="Full Name" required>
            </div>
            <!--<div class="input-box">
                <input type="text" name="category" placeholder="Category" required>
            </div>-->
           <!-- <div class="input-box">
            <label for="category">Categories</label>
                <select id="category" name="category">
                    <option value="volvo">Smartphone</option>
                    <option value="saab">Led</option>
                    <option value="fiat">Laptop</option>
                </select>
            </div>-->
            <div class="input-box">
            <label for="category">Categories</label>
            <select class="form-dropdown" id="category" name="category" style="width:150px" 
            data-component="dropdown" aria-label="Product Category"><option value="">Please Select</option>
            <option value="smartphone">SMARTPHONE</option>
            <option value="led">LED</option>
            <option value="laptop">LAPTOP</option>
            </select>
            </div>
            <div class="input-box">
                <input type="text" name="model" placeholder="Model" required>
            </div>
            
            <div class="input-box">
                <input type="text" name="description" placeholder="Description" required>
            </div>
            <div class="input-box">
                <input type="number" name="price" placeholder="Price" required>
            </div>
            <div class="input-box">
                <input type="number" name="qty" placeholder="Quantity" required>
            </div>
            <div class="input-box button">
                <input type="Submit" name="submit" value="ADD">
            </div>
           
        </table>
</div>
</center>



<br><br>
<?php include "footer.php"?>
</body>
<html>