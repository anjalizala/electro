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
            $sql = "SELECT p_id,name,model,price,img FROM  phone";
		
			//$sql="SELECT * FROM phone WHERE $id=p_id";

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
                   
                     $id = $row['p_id'];
                     $name = $row['name']; 
                     $model = $row['model']; 
                     $price = $row['price'];
                     $image = $row['img'];                 
                     ?>
                      
                      
                     <!-- product body -->
                     <div class="product">
                     <span><?php //echo $id?></span>
					 						<a href="pd.php">
											<a href="pd.php?id=<?php echo $id;?>">
											<div class="product-img">
											<img src="<?php echo $image;?>" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
				 							</a>
											<div class="product-body">
												<p class="product-category"><a href="pd.php"><?php echo $name ?></a></p>
												<h3 class="product-name"><a href="pd.php"><?php echo $model ?></a></h3>
												<h4 class="product-price">&#8377;<?php echo $price ?> </h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
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
