<?php include('partials-front/menuu.php'); ?>


<main>
<main>
    <div class="menu" id="Menu">
        <h1>Our<span>Dessert</span></h1>

        <div class="menu_box">
            <?php 
          

            $sql = "SELECT * FROM recette where typeR='dessert'";
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
                    <a href="<?php echo SITEURL; ?>recette2.php?id=<?php echo $id; ?>" class="menu_btn">Try it</a>

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
                            This strawberry cake was incredible! The cake itself was moist and flavorful, 
                            and the fresh strawberries added a perfect burst of sweetness and tartness
                          
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
                            This dessert was the perfect way to end our meal.
                             It was light and refreshing, and the flavors were perfectly balanced. 
                            
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
                            I'm not usually a fan of cheesecake, but this one was amazing!
                             The crust was perfectly graham cracker-y,
                              and the cheesecake itself was light and fluffy. 
                            
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
                            This dessert was absolutely delicious! The chocolate was rich and decadent
                            , and the raspberry coulis was the perfect balance of sweet and tart 
                            
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
