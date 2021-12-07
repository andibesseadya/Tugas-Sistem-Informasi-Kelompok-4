<?php include('partials-front/menu.php'); ?>

    <!-- Search Bar -->
    <section class="food-search text-center bg-all">
        <div class="container">
            <?php 
            
                //Get the search keyword
                $search = $_POST['search'];

            ?>

            <h2>Foods on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>
        
        </div>
    </section>      

    <!-- Menu Makanan -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center"> Menu Makanan</h2>

            <?php
         
                //Sql Query to get foods based on search keyword
                $sql = "SELECT * FROM tbl_food WHERE title LIKE '%$search%' OR description LIKE '%$search%'"; 

                //Execute the query
                $res = mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //check whether food available of not 
                if($count>0)
                {
                    //food available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        // get the details
                        $id = $row['id'];
                        $title = $row['title'];
                        $price = $row['price'];
                        $description = $row['description'];
                        $image_name = $row['image_name'];
                        ?>

                        <div class="food-menu-box">
                            <div class="food-menu-img">
                                <?php 
                                
                                    // check whether image name is available or not
                                    if($image_name=="")
                                    {
                                        // image not available
                                        echo "<div class='error'>Image not Available.</div>";
                                    }
                                    else
                                    {
                                        // image available 
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Nasi Goreng" class="img-responsive img-curve">
                                        <?php

                                    }
                                
                                ?>
                                
                            </div>

                            <div class="food-menu-desc">
                                <h4><?php echo $title; ?></h4>
                                <p class="food-price">Rp<?php echo $price; ?></p>
                                <p class="food-detail">
                                    <?php echo $description; ?>
                                </p>
                                <br>

                                <a href="order.html" class="btn btn-primary">Order Now</a>
                            </div>
                        </div>


                        <?php
                    }
                }
                else
                {
                    // food not available
                    echo "<div class='error'>Food not found.</div>";
                }

            ?>



            <div class="clearfix"></div>          
        </div>
    </section>

    <?php include('partials-front/footer.php'); ?>