<?php include('partials-front/menuu.php'); ?>



<main>

        <!------------------------ Site Title ---------------------->
         
        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
           
                <h3>FOODLAND</h3>
                <br>
                <h1>Recipes for Every Craving</h1>
                
                <h4>Find the perfect recipe in just a few clicks! <br> Thousands of recipes at your fingertips!!<br>Cook like a chef with Foodland!</h4><br>
                
                <div class="box">
            <form method="POST" action="filtrage.php">
                <select name="category">
                    <option value="dessert">Dessert</option>
                    <option value="main">Main</option>
                    <option value="appetizer">Appetizer</option>
                    <option value="brunch">Brunch</option>
                   
                </select>
                <button type="submit" name="filter" class="button">Search</button>
            </form>
        </div>
    </div>
            <div class="hero-img">
                <img src="images/home.png">
            </div>
 <style>
   .box select {
    background-color: #e65710;
    color: #fff;
    height: 3rem;
    width: 15rem;
    padding: 10px;
    font-size: 16px;
    outline: none;
    border: none;
    box-shadow: 0 5px 25px #fff;
  }
  .button{
    padding-right: 20px;
    box-shadow: 0  #fff;
    background: #e65710;
    color: #fff;
  border-color: none;
    font-size: 1rem;
  height: 3rem;
    font-family: "Times New Roman", Times, serif;}
  
             </style>
        </section>

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Blog Carousel ----------------- -->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img class="image" src="images/steak-5544749_1280.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Treat yourself to the ultimate steak experience with our dish</h3>
                                <button class="btn btn-blog">Dessert</button>
                                <span>1 h and 25 min</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img class="image" src="images/strawberries-2550024_1280.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Enjoy the simplicity of this combination of strawberries and cream</h3>
                                <button class="btn btn-blog">Healthy</button>
                                <span>5 minutes</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img class="image" src="images/cream-2341149_1280.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Let yourself be enchanted by this orange cream dessert</h3>
                                <button class="btn btn-blog">Healthy </button>
                                <span>2 h et 20 min</span>
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img class="image" src="images/food3.jpeg" alt="post-1">
                            <div class="blog-title">
                                <h3>Lasagna with fresh ricotta cheese and homemade tomato sauce</h3>
                                <button class="btn btn-blog">Delecious</button>
                                <span>2 h et 20 min</span>
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------x-----------   --------x-------- -->

        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="images/raspberries-2023404_1280.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Easy  dark chocolate cake with cream cheese. Extremely delicious, creamy and rich in flavor, yum!</a>
                            <h4>The recipe for the all-chocolate cake is easy to make.
                                 You only need dark chocolate, cornstarch,
                                  a few eggs, a little butter, and a pinch of fleur de sel
</h4>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="images/cake-3060458_1280.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Enjoy your gathering filled with deliciousness and health! </a>
                            <h4>Garlic Herb Butter Steak in the Oven 
                                 Impress your family this holiday season with this beautiful,
                                 flavorful roasted rib-eye steak! The tender cut is sure to be a crowd-pleaser.
</h4>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="images/sandwich.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">How to prepare this healthy and delicious dish? Just follow us!</a>
                            <h4>Enjoy a delicious start to your meal , featuring a variety of gourmet fillings nestled between slices of baked bread
</h4>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr>
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="images/ice-cream-5928048_1280.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">Perfect for enhancing your day, this delicious and healthy dish is ready in just 30 minutes!</a>
                            <h4>Refresh yourself with this bowl of ice cream, an explosion of freshness to revitalize you at any time of the day
</h4>
                            <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="pagination flex-row">
                        <a href="#"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="pages">1</a>
                        <a href="<?php echo SITEURL; ?>index2.php" class="pages">2</a>
                        <a href="#" class="pages">3</a>
                        <a href="index2.html"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h2>Category</h2>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="<?php echo SITEURL; ?>appetizer.php">Appetizers</a>
                               
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                            <a href="<?php echo SITEURL; ?>starter.php">Starters</a>
                                
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="<?php echo SITEURL; ?>mainrecette.php">Main courses</a>
                               
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="<?php echo SITEURL; ?>recette.php">Dessert</a>
                                
                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                            <a href="<?php echo SITEURL; ?>brunch.php">Brunch</a>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="popular-post">
                        <h2> Top Picks on Foodland</h2>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="images/gallary_1.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">A classic club sandwich recipe that is layered with turkey, ham, and
                                     bacon between slices of bread. The sandwich is the perfect lunch recipe.</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="images/gallary_5.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Pepperoni and Burrata Pizza with Pesto; flavorful and delicious pizza that you will love.</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="images/gallary_6.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">The Best Vegan Chocolate Cake made with simple ingredients in one bowl.
                                     It’s incredibly delicious, rich with chocolate flavour, and can be made gluten-free</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="images/ice_cream.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">There's nothing more tasty or comforting than homemade
                                     ice cream. Using fresh or frozen strawberries and a 
                                    Cuisinart ice cream maker is so easy that you'll want to make this all the time</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="images/buger.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#">Looking for some quick dinner ideas for tonight? 
                                    Try this creamy Tuscan chicken with spinach and sun-dried tomatoes!</a>
                            </div>
                        </div>
                    </div>
                    <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                        <h2></h2>
                       
                    </div>
                </aside>
            </div>
        </section>

        <!-- -----------x---------- Site Content -------------x------------>

    </main>

    <?php include('partials-front/footer.php'); ?>