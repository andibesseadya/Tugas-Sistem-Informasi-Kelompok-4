<?php include('partials-front/menu.php'); ?>

<?php 
    // check whether id is passed or not
    if(isset($_GET['category_id']))
    {
        // category id is set and get the id
        $category_id = $_GET['category_id'];
        // Get the category title based on category ID
        $sql = "SELECT title FROM tbl_category WHERE id=$category_id";

        $res = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($res);

        $category_title = $row['title'];
    }
    else
    {
        //category not passed
        //redirect to home page 
        header('location:'.SITEURL);
    } 


?>


    <!-- Banner -->
    <section class="food-search text-center bg-food">
        <div class="container">            
            <h2><a href="#" class="text-white"> Category </a><?php echo $category_title; ?></h2>
        </div>
    </section>



    <!-- Menu Makanan -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center"> Menu Makanan</h2>
            <?php 
                
                //Create SQL Query to Get foods based on Selected CAtegory
                $sql2 = "SELECT * FROM tbl_food WHERE category_id=$category_id";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //Count the Rows
                $count2 = mysqli_num_rows($res2);

                //CHeck whether food is available or not
                if($count2>0)
                {
                    //Food is Available
                    while($row2=mysqli_fetch_assoc($res2))
                    {
                        $id = $row2['id'];
                        $title = $row2['title'];
                        $price = $row2['price'];
                        $description = $row2['description'];
                        $image_name = $row2['image_name'];
                        ?>
                        
                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php 
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Nasi Goreng" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                
                            </div>

                            <div class="food-menu-desc">
                                <h4><?php echo $title; ?></h4>
                                <p class="food-price">$<?php echo $price; ?></p>
                                <p class="food-detail">
                                    <?php echo $description; ?>
                                </p>
                                <br>

                                <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //Food not available
                    echo "<div class='error'>Food not Available.</div>";
                }
            
            ?>
            <div class="clearfix"></div>          
        </div>
    </section>

    <?php include('partials-front/footer.php'); ?>