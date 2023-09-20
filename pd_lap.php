<?php session_start();?>
<?php include "header.php";
if(isset($_GET['id']))
{
	echo $_GET['id'];

}
?>


<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">							
						
					<!-- Product main img -->
				   <!-- <div class="col-md-5 col-md-push-2">
						 <div id="product-main-img">
							<div class="product-preview">
								<img src="<?php //echo $image;?>" alt="">
							</div>
						</div>
					</div>    -->
					<!-- /Product main img -->

					
<?php 
            include "dbname.php";
            //Display all the laptop that are active
            //Sql Query
            //$sql = "SELECT * FROM  laptop";
			$sql = "SELECT * FROM  laptop where lp_id=".$_GET['id'];

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

                   
                    // $id = $row['p_id'];
                     $name = $row['name']; 
                     $model = $row['model']; 
                     $price = $row['price'];
                     $image = $row['img'];
					 $des = $row['des'];
					 
				// if(mysqli_num_rows($res) == 1)
				// {
				// 	$row=mysqli_fetch_assoc($res);
				// 	if ( $_row['p_id'] == $id)
				// 	{
				// 	   $_SESSION['name'] = $row['name'];
				// 	   $_SESSION['model'] = $row['model'];
				// 	   $_SESSION['price'] = $row['price'];
				// 	   $_SESSION['des'] = $row['des'];
				// 	   //header("Location: index.php");
				// 	   //exit();
				// 	   echo '<script>window.location="index.php"</script>';
				   
				// 	}
				   
				?> 
				<!-- Product main img -->
				 <div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="<?php echo $image;?>" alt="">
							</div>
						</div>
					</div> 
					<!-- /Product main img -->
					
					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="<?php echo $image;?>" alt="">
							</div>
							<div class="product-preview">
								<img src="<?php echo $image;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo $image;?>" alt="">
							</div>
							
						</div>
					</div>
					<!-- Product thumb imgs --> 

					<!--Product details-->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $model ?></h2>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div>
							<div>
								<h3 class="product-price"><?php echo $price ?></h3>
								<span class="product-available">In Stock</span>
							</div>
							<!-- <p<?php //echo $des ?></p> -->
							<div class="product-details">
							<h2 class="product-name"><?php echo $des ?></h2>
							</div>

							<!-- /product -->
            

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
								
							</ul>

							<ul class="product-links">
								<li>Category:</li>
								<li><a href="#">laptop</a></li>
								<li><a href="#">smartphone</a></li>
                                <li><a href="#">led</a></li>
							</ul>

							<ul class="product-links">
								<li>Share:</li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i></a></li>
							</ul>

						</div>
					</div>
					<!-- /Product details -->
					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
				</div>
				</div>				
                 <?php  
                }
			}
           // }
              //CAtegories Not Available
                else {
                   echo "0 results";
                 }
                 
                 mysqli_close($conn);
				 ?>
				 	<!-- /product tab nav -->
					 </div>
                   <!-- </div>-->
                    	<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->                   

<?php include "footer.php"; ?>

