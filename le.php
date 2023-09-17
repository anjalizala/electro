<?php include "header.php";?>
<!DOCTYPE html>
<html lang="en">
<body>
<div class="product-body">
        <h2>Led</h2>
        <br><br>
</div>
<?php 
            include "dbname.php";
            //Display all the laptop that are active
            //Sql Query
            $sql = "SELECT * FROM  led";

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            //Count Rows
            $count = mysqli_num_rows($res);
             //CHeck whether categories available or not
             if($count>0)
             {
                 //CAtegories Available
                 while($row=mysqli_fetch_assoc($res))
                 {
                    echo "  Name: " . $row["name"]. " " . $row["model"]. " " . $row["price"]. "<br>";
                     //Get the Values
                   
                    //  $name = $row['name']; 
                    //  $model = $row['model']; 
                    //  $price = $row['price'];
                    // $img = $row['img']                  
                     ?>
                     
                    <!--<a href="<?php //echo SITEURL; ?>product.php">-->
                        <!-- <div class="box-3 float-container">
                              <?php 
                                //  if($img=="")
                                //  {
                                //      //Image not Available
                                //      echo "<div class='error'>Image not found.</div>";
                                //  }
                                //  else
                                //  {
                                //      //Image Available
                                //      ?>
                                //      <img src="<?php echo SITEURL; ?>img<?php echo $img; ?>" alt="Pizza" class="img-responsive img-curve">
                                //      <?php
                                //  } 
                             ?> 
                             
 
                             <h3 class="float-text text-white"><?php echo $name; ?></h3>
                         </div>-->
                   <!-- </a>-->
 
                     <?php
                 }
             }
               //CAtegories Not Available
                 else {
                    echo "0 results";
                  }
                  
                  mysqli_close($conn);
         
         ?>

    
</body>
</html>
<?php include "footer.php";?>