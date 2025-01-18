<?php include('partials-front/menuu.php'); ?>


<main>
<main>
    <div class="menu" id="Menu">
    <h1>Our<span>Appetizers</span></h1>

        <div class="menu_box">
            <?php 
          

            $sql = "SELECT * FROM recette where typeR='appetizer'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            
            if($count > 0) {
                while($row = mysqli_fetch_assoc($res)) {

                    $id = $row['idR'];
                    $nom = $row['nomR'];
                    $image_name = $row['nomi'];
                    $description = $row['desR'];
            ?>
            <div class="menu_card">
                <div class="menu_image">
                    <?php 
                    if(!empty($image_name)) {
                        ?>
                        <img src="<?php echo SITEURL; ?>images/recette/<?php echo $image_name; ?>" alt="<?php echo $nom; ?>" class="menu_image">
                    <?php 
                    } else {
                        echo "<div class='error'>Image not found.</div>";
                    }
                    ?>
                </div>
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <div class="menu_info">
                    <h2><?php echo $nom; ?></h2>
                    <p><?php echo $description; ?></p>
                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="<?php echo SITEURL; ?>recette1.php?id=<?php echo $id; ?>" class="menu_btn">Try it</a>
                </div>
            </div>
            <?php
                }
            } else {
                echo "<div class='error'>No desserts found.</div>";
            }
            ?>
        </div>
    </div>
    <div class="review" id="Review">
            <h1>Recent <span>comments</span></h1>
    
            <div class="review_box">
                <div class="review_card">
    
                    <div class="review_profile">
                        <img src="images/review_2.png">
                    </div>
    
                    <div class="review_text">
                        <h2 class="name">Leo Thompson
                        </h2>
    
                        <div class="review_icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
    
                        <div class="review_social">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-linkedin-in"></i>
                        </div>
    
                        <p>
                        This pizza is a slice of heaven! The crust is crispy,
                         the toppings are fresh and flavorful, and every bite is pure satisfaction
                          
                        </p>
    
                    </div>
    
                </div>
    
                <div class="review_card">
    
                    <div class="review_profile">
                        <img src="images/review_1.png">
                    </div>
    
                    <div class="review_text">
                        <h2 class="name">Mia Chang
                        </h2>
    
                        <div class="review_icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
    
                        <div class="review_social">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-linkedin-in"></i>
                        </div>
    
                        <p>
                        The rice chicken dish is a perfect blend of savory chicken,
                         fluffy rice, and aromatic spices. Comfort food at its finest 
                            
                        </p>
    
                    </div>
    
                </div>
    
                <div class="review_card">
    
                    <div class="review_profile">
                        <img src="images/review_3.png">
                    </div>
    
                    <div class="review_text">
                        <h2 class="name">Olivia Li
                        </h2>
    
                        <div class="review_icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
    
                        <div class="review_social">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-linkedin-in"></i>
                        </div>
    
                        <p>
                        The hamburger is juicy, flavorful, 
                        and piled high with all my favorite toppings.
                         A classic comfort food done right 
                            
                        </p>
    
                    </div>
    
                </div>
    
                <div class="review_card">
    
                    <div class="review_profile">
                        <img src="images/review_4.png">
                    </div>
    
                    <div class="review_text">
                        <h2 class="name"> Blake Sullivan
                        </h2>
    
                        <div class="review_icon">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
    
                        <div class="review_social">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-twitter"></i>
                            <i class="fa-brands fa-linkedin-in"></i>
                        </div>
    
                        <p>
                        This Italian pasta dish is a taste of Italy in every bite! Rich, 
                        flavorful sauce and perfectly cooked pasta. 
                            
                        </p>
    
                    </div>
    
                </div>
    
            </div>
    
        </div>
        <div class="pagination flex-row">
            <a href="#"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="pages">1</a>
            <a href="#" class="pages">2</a>
            <a href="#" class="pages">3</a>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </div>
        <br>
        <br>
</main> 
<?php include('partials-front/footer.php'); ?>
