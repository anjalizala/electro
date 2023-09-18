<?php include "header.php";?>

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
								<img src="" alt="">
							</div>

							<div class="product-preview">
								<img src="" alt="">
							</div>

							<div class="product-preview">
								<img src="" alt="">
							</div>

							<div class="product-preview">
								<img src="" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->
<?php 
            include "dbname.php";
            //Display all the laptop that are active
            //Sql Query
            $sql = "SELECT * FROM  laptop";

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

                   // echo "  Name: " . $row["name"]. " " . $row["model"]. " " . $row["price"]. "<br>";
                     //Get the Values
                   
                    // $id = $row['p_id'];
                     $name = $row['name']; 
                     $model = $row['model']; 
                     $price = $row['price'];
                    // $img = $row['img']  
                   
                }
            }
              //CAtegories Not Available
                else {
                   echo "0 results";
                 }
                 
                 mysqli_close($conn);
        
        ?>
                   
                     
                     <!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="" alt="">
							</div>

							<div class="product-preview">
								<img src="" alt="">
							</div>

							<div class="product-preview">
								<img src="" alt="">
							</div>

							<div class="product-preview">
								<img src="" alt="">
							</div>
						</div>
					</div>
              
					<!-- /Product thumb imgs -->

                    <!-- Product details -->
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
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

							
												<!-- /product -->
            

							<ul class="product-btns">
								<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
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
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li>
							</ul>
							<!-- /product tab nav -->
                        </div>
                    </div>
                    	<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

              

                    

                      
                      
                    

<?php include "footer.php"; ?>

