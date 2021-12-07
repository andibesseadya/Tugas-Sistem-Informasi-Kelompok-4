<?php include('partials-front/menu.php'); ?>

    <!-- Form Pemesanan -->
    <section class="food-search bg-order">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="#" class="order">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <img src="images/menu/nasi-uduk.svg" alt="Nasi Uduk" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3>Rice Cooked in Coconut Milk</h3>
                        <p class="food-price">Rp 39.999</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="Andi Widad Sucitra" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="0852-xxxx-xxx2" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="yayangnyayangyang.com" class="input-responsive" required>

                    <div class="order-label">Hotel Room Number</div>
                    <textarea name="address" rows="10" placeholder="Kamar 713" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>
            </form>
        </div>
    </section>
    

    <?php include('partials-front/footer.php'); ?>