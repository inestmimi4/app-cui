<?php include('partials-front/menuu.php'); ?>
<main>
    <div class="menu" id="Menu">
        <h1>Your<span>Search</span></h1>

        

        <div class="menu_box">
            <?php
            if(isset($_POST['filter'])) {
                $category = $_POST['category'];
                $sql = "SELECT * FROM recette";

                if(!empty($category)) {
                    $sql .= " WHERE typeR = '$category'";
                }

                $res = mysqli_query($conn, $sql);

                if(mysqli_num_rows($res) > 0) {
                    
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
            }
            ?>
        </div>
        <div class="pagination flex-row">
            <a href="#"><i class="fas fa-chevron-left"></i></a>
            <a href="#" class="pages">1</a>
            <a href="#" class="pages">2</a>
            <a href="#" class="pages">3</a>
            <a href="#"><i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
</main>

<?php include('partials-front/footer.php'); ?>
