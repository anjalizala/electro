<?php include "header.php"; ?>
<?php include "dbname.php"; ?>

<div class="col-4 text-center" style="background-color:#FF7961;" >
                    <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM laptop";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>
</div>

                    <h1><?php echo $count; ?></h1>
                    <br />
                    Laptop
                </div>

                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM led";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>

                    <h1><?php echo $count; ?></h1>
                    <br />
                    Led
                </div>

                <?php 
                        //Sql Query 
                        $sql1 = "SELECT * FROM phone";
                        //Execute Query
                        $res1 = mysqli_query($conn, $sql1);
                        //Count Rows
                        $count = mysqli_num_rows($res1);
                    ?>

                    <h1><?php echo $count; ?></h1>
                    <br />
                    smartphone
                </div>

<?php include "footer.php"; ?>