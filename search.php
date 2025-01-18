<?php include('partials-front/menu.php'); ?>


<main>
<main>
    <div class="menu" id="Menu">
        <h1>Our<span>Dessert</span></h1>

        <div class="menu_box">
        <?php
      if(isset($_POST['search'])) {
    $search_term = $_POST['search'];
    $sql = "SELECT * FROM recette WHERE nomR LIKE '%$search_term%' OR desR LIKE '%$search_term%'";
    $res = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($res) > 0) {
        // Affichage des résultats
        while($row = mysqli_fetch_assoc($res)) {
            // Affichage de chaque résultat avec le même style que les cartes de recette
            echo "<div class='menu_card'>";
            echo "<div class='menu_image'>";
            if(!empty($row['nomi'])) {
                echo "<img src='images/recette/".$row['nomi']."' alt='".$row['nomR']."' class='menu_image'>";
            } else {
                echo "<div class='error'>Image not found.</div>";
            }
            echo "</div>";
            echo "<div class='small_card'>";
            echo "<i class='fa-solid fa-heart'></i>";
            echo "</div>";
            echo "<div class='menu_info'>";
            echo "<h2>".$row['nomR']."</h2>";
            echo "<p>".$row['desR']."</p>";
            echo "<div class='menu_icon'>";
            echo "<i class='fa-solid fa-star'></i>";
            echo "<i class='fa-solid fa-star'></i>";
            echo "<i class='fa-solid fa-star'></i>";
            echo "<i class='fa-solid fa-star'></i>";
            echo "<i class='fa-solid fa-star-half-stroke'></i>";
            echo "</div>";
            echo "<a href='#' class='menu_btn'>Try it</a>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<div class='error'>No results found.</div>";
    }
} else {
    echo "<div class='error'>Please enter a search term.</div>";
}

include('partials-front/footer.php');
?>
