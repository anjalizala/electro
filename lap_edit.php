<?php include "header.php"?>
<?php
    include "dbname.php";
    if(isset($_POST['edit']))
    {
        if(isset($_GET['id']))
        {
            $lp_id=$_GET['lp_id'];
            $name=$_POST['name'];
            $model=$_POST['model'];
            $price=$_POST['price'];


            //for update image
            //update data with image
            if(!empty($_FILES['new_image'] ['name']))
            {
                
                $target_dir="img/";
                $target_file=$target_dir.basename($_FILES['new_image']['name']);
                $imagetype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                if(move_uploaded_file($_FILES['new_image']['tmp_name'],$target_file))
                {
                    $new_image=$target_file;
                    $sql="UPDATE laptop SET name='$name',model='$model',price='$price',image_name='$new_image' WHERE lp_id=$lp_id";
                }
                else
                {
                    echo "Error to upload new data";
                }
            }
            else
            {
                //update data without image
                $sql="UPDATE laptop SET name='$name',$model='$model',$price='$price' WHERE lp_id=$lp_id";
            }

            $res=mysqli_query($conn,$sql);
            if($res)
            {
                header("location:index.php");
            }
            else
            {
                echo "Data not updated";
            }

            //retrive data for editing
            $sql1="SELECT * FROM laptop WHERE lp_id = $lp_id";
            $result=mysqli_query($conn,$sql1);
            $row=mysqli_fetch_array($result);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>NAMe :</td>
                <td><input type="text" name="new_name" value="<?php //echo $row['name']; ?>"></td>
            </tr>
            <tr>
                <td>model :</td>
                <td><input type="text" name="model" value="<?php //echo $row['email']; ?>"></td>
            </tr>
            <tr>
                <td>price :</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>Image :</td>
                <td><input type="file" name="new_image" accept="image/*" ></td>
            </tr>
            <label for="cars">Choose a category:</label>

            <select name="electro" id="electro">
            <option value="laptop">Laptop</option>
            <option value="led">Led</option>
            <option value="smartphone">Smartphone</option>
            
            </select>
            <tr>
                <td>
                    <input type="submit" name="edit" value="Update">
                </td>
            </tr>
        </table>
   </form> 
</body>
</html>
<?php include "footer.php";?>