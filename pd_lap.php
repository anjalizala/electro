<?php session_start();?>
<?php include "header.php";


if(isset($_GET['id']))
{
	echo $_GET['id'];

}

?>
<?php 
            include "dbname.php";
            //Display all the laptop that are active
            //Sql Query
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
					 $image1 = $row['img1'];
					 $image2 = $row['img2'];
					 $image3 = $row['img3'];
					 $des = $row['des'];
				
			
				   
				?> 
<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="<?php echo $image;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo $image1;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo $image2;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo $image3;?>" alt="">
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
								<img src="<?php echo $image1;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo $image2;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo $image3;?>" alt="">
							</div> 
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?php echo $model; ?></h2>
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
								<h3 class="product-price">&#8377;<?php echo $price; ?></h3>
								<span class="product-available">In Stock</span>
							</div>
							<p><?php echo $des;?></p>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>

						</div>
					</div>
					<!-- /Product details -->	
				</div>				
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->
<?php
}

}
else {
	echo "0 results";
  }
  
  mysqli_close($conn);
  ?>
		
<?php include "footer.php";?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
