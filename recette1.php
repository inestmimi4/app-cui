<?php include('partials-front/main.php'); ?>

<?php

if(isset($_GET['id'])) {
    
    $recette_id = $_GET['id'];
    
   
    $sql = "SELECT * FROM recette WHERE idR = $recette_id";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_assoc($result);
        $id = $row['idR'];
        $nom = $row['nomR'];
        $image_name = $row['nomi'];
        $description = $row['desR'];
?>
        <main class="page">
          <div class="recipe-page">
            <section class="recipe-hero">
            <?php 
                    if(!empty($image_name)) {
                        ?>
                        <img src="<?php echo SITEURL; ?>images/recette/<?php echo $image_name; ?>" alt="<?php echo $nom; ?>" class=" recipe-hero-img">
                    <?php 
                    } else {
                        echo "<div class='error'>Image not found.</div>";
                    }
                    ?>
              <article class="recipe-info">
                <h2><?php echo $row['nomR']; ?></h2>
                <p><?php echo $row['desR']; ?></p>
                <!-- Afficher d'autres détails de la recette en fonction de votre structure de base de données -->
                <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>prep time</h5>
                <p>15 min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>cook time</h5>
                <p>30-35 min.</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>serving</h5>
                <p>6 servings</p>
              </article>
            </div>
            <p class="recipe-tags">
              Tags : <a href="tag-template.html">beef</a>
              <a href="tag-template.html">breakfast</a>
              <a href="tag-template.html">pancakes</a>
              <a href="tag-template.html">food</a>
            </p>
          </article>
        </section>
        <!-- content -->
        <section class="recipe-content">
          <article>
            <h4>instructions</h4>
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 1</p>
                <div></div>
              </header>
              <p>
                Preheat oven to 350°F (175°C). Grease and flour your cake pans or line them with parchment paper.
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 2</p>
                <div></div>
              </header>
              <p>
                Cake: In a medium bowl, whisk together flour, baking powder, and salt. Set aside
              </p>
            </div>
            <!-- end of single instruction -->
            <!-- single instruction -->
            <div class="single-instruction">
              <header>
                <p>step 3</p>
                <div></div>
              </header>
              <p>
                In a large bowl, cream together butter and sugar until light and fluffy,
                 using an electric mixer. Beat in eggs one at a time, then stir in vanilla extract.
              </p>
            </div>
            <div class="single-instruction">
              <header>
                <p>step 4</p>
                <div></div>
              </header>
              <p>
                Alternately add the dry ingredients and milk to the wet ingredients, beginning and ending with the dry ingredients.
                 Mix until just combined, be careful not to overmix.
              </p>
            </div>
            <div class="single-instruction">
              <header>
                <p>step 5</p>
                <div></div>
              </header>
              <p>
                Divide batter evenly between the prepared cake pans.
              </p>
            </div>
            <div class="single-instruction">
              <header>
                <p>step 6</p>
                <div></div>
              </header>
              <p>
                Bake for 30-35 minutes, or until a toothpick inserted into the center comes out clean.
                 Let cakes cool completely on a wire rack before frosting.
              </p>
            </div>
            <div class="single-instruction">
              <header>
                <p>step 7</p>
                <div></div>
              </header>
              <p>
                Frosting: Using an electric mixer, cream together softened butter, powdered sugar, and salt until smooth.
                 Beat in milk one tablespoon at a time until frosting reaches desired consistency. Stir in vanilla extract.
              </p>
            </div>
            <div class="single-instruction">
              <header>
                <p>step 8</p>
                <div></div>
              </header>
              <p>
                Assemble: Once cakes are cool, place one layer on a cake plate or serving platter. Spread a layer of frosting on top.
                 Add the second cake layer and frost the entire cake, sides and top.
              </p>
            </div>

            <!-- end of single instruction -->
          </article>
          <article class="second-column">
            <div>
              <h4>ingredients</h4>
              <p class="single-ingredient">1 1/2 cups all-purpose flour</p>
              <p class="single-ingredient">1 1/2 teaspoons baking powder</p>
              <p class="single-ingredient"> 1/2 teaspoon salt</p>
              <p class="single-ingredient"> 1/2 cup unsalted butter, softened</p>
              <p class="single-ingredient"> 1 1/2 cups granulated sugar</p>
              <p class="single-ingredient">3 large eggs</p>
              <p class="single-ingredient">1 teaspoon vanilla extract</p>
              <p class="single-ingredient">1 cup milk</p>

            </div>
            <div>

              <h4>tools</h4>
              <p class="single-tool">Mixing bowls (2)</p>
              <p class="single-tool">Whisk</p>
              <p class="single-tool">Measuring cups and spoons</p>
              <p class="single-tool">2 round cake pans (8 or 9 inch)</p>
              <p class="single-tool">Parchment paper</p>
              <p class="single-tool">Serrated knife (for frosting)</p>
              <p class="single-tool">Spatula</p>
              


            </div>
          </article>
        </section>
      </div>
    </main>
             
<?php
    } else {
        echo "Recette non trouvée.";
    }
} else {
    echo "Identifiant de recette non spécifié.";
}
?>
   
    
    <?php include('partials-front/footer.php'); ?>