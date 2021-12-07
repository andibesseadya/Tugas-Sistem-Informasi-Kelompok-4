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

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu/nasi-goreng.svg" alt="Nasi Goreng" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Special Fried Rice</h4>
                    <p class="food-price">Rp 59.999</p>
                    <p class="food-detail">
                        nasi goreng spesial pakai telur.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu/nasi-uduk.svg" alt="Nasi Uduk" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Rice Cooked in Coconut Milk</h4>
                    <p class="food-price">Rp 39.999</p>
                    <p class="food-detail">
                        nasi uduk.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu/gado-gado.svg" alt="Gado-Gado" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Mix Vegetables in Peanut Sauce</h4>
                    <p class="food-price">Rp 49.999</p>
                    <p class="food-detail">
                        gado-gado.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu/ayam-geprek.svg" alt="Ayam Geprek" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Rice with Chicken Smackdown</h4>
                    <p class="food-price">Rp 33.777</p>
                    <p class="food-detail">
                        nasi ayam geprek.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu/mie-kering.svg" alt="Mie Kering" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Crispy Fried Noodle</h4>
                    <p class="food-price">Rp 33.999</p>
                    <p class="food-detail">
                        mie kering.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu/bakmi.svg" alt="Mie Ayam" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Noodle Soup</h4>
                    <p class="food-price">Rp 23.999</p>
                    <p class="food-detail">
                        mie ayam.
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>
            <div class="clearfix"></div>          
        </div>
    </section>

    <?php include('partials-front/footer.php'); ?>