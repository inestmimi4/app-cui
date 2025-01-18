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

        // Récupérer les ingrédients associés à la recette depuis la table ing_recette
        $sql_ingredients = "SELECT ingredient.nomI, ing_recette.quantite
         FROM ing_recette  INNER JOIN ingredient ON ing_recette.idI = ingredient.idI WHERE ing_recette.idR = $recette_id";
        $result_ingredients = mysqli_query($conn, $sql_ingredients);

        // Récupérer les instructions associées à la recette depuis la table instructions
        $sql_instructions = "SELECT etape, instruction FROM instructions WHERE idR = $recette_id ORDER BY etape";
        $result_instructions = mysqli_query($conn, $sql_instructions);

        // Récupérer les outils associés à la recette depuis la table equipement
        $sql_equipments = "SELECT nomE FROM equipement WHERE idR = $recette_id";
        $result_equipments = mysqli_query($conn, $sql_equipments);
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
                <h4>Instructions</h4>
                <?php 
                    // Afficher les instructions récupérées
                    while($instruction_row = mysqli_fetch_assoc($result_instructions)) {
                      echo "<div class='single-instruction'>";
                      echo "<header>";
                      echo "<p>step " . $instruction_row['etape'] . "</p>";
                      echo "<div></div>";
                      echo "</header>";
                      echo "<p>" . $instruction_row['instruction'] . "</p>";
                      echo "</div>";
                    }
                ?>
              </article>
              <article class="second-column">
                <div>
                  <h4>Ingrédients</h4>
                  <?php 
                    // Afficher les ingrédients récupérés
                    while($ingredient_row = mysqli_fetch_assoc($result_ingredients)) {
                      echo "<p class='single-ingredient'>" . $ingredient_row['quantite'] . "   " .$ingredient_row['nomI'] .  "</p>";
                    }
                  ?>
                </div>
                <div>
                  <h4>Outils</h4>
                  <?php 
                    // Afficher les outils récupérés
                    while($equipment_row = mysqli_fetch_assoc($result_equipments)) {
                      echo "<p class='single-tool'>" . $equipment_row['nomE'] . "</p>";
                    }
                  ?>
                  <!-- Afficher les outils récupérés -->
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
