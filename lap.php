<?php include "header.php"; ?>
<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
			
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
                   
                     $id = $row['lp_id'];
                     $name = $row['name']; 
                     $model = $row['model']; 
                     $price = $row['price'];
                     $img = $row['img'];                  
                     ?>
                      
                      
                     <!-- product body -->
                     <div class="product">
                     <span><?php //echo $id?></span> 
					 						<a href="pd_lap.php">
											<a href="pd_lap.php?id=<?php echo $id;?>">
											<div class="product-img">
												<img src="<?php echo $img ?>" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
				 							</a>
											<div class="product-body">
												<p class="product-category"><?php echo $name ?></p>
												<h3 class="product-name"><a href="#"><?php echo $model ?></a></h3>
												<h4 class="product-price">&#8377;<?php echo $price ?> </h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>-->
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>

										<!-- /product -->
                     <?php
                 }
             }
               //CAtegories Not Available
                 else {
                    echo "0 results";
                  }
                  
                  mysqli_close($conn);
         
         ?>
		 							</div>
											<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

<?php include "footer.php"; ?>
