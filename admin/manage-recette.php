<?php include('partials/menu.php'); ?>
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>Manage Recette</h2>
           
             <a href="<?php echo SITEURL; ?>admin/addrecette.php" class="btnn">Add Recette</a>
        </div>
        <table>
            <tr>
                <td>R.I</td>
                <td>Nom</td>
                <td>Image</td>
                <td>Niveau</td>
                <td>Type</td>
                <td>Action</td> <!-- Ajout d'une colonne pour les actions -->
            </tr>
            <?php 
            // Requête pour récupérer toutes les recettes
            $sql = "SELECT * FROM recette";
            // Exécution de la requête
            $res = mysqli_query($conn, $sql);
            // Vérification si la requête a été exécutée avec succès
            if($res == TRUE) {
                // Compter le nombre de lignes retournées
                $count = mysqli_num_rows($res);
                $sn = 1; // Initialisation du compteur
                // Vérification si des données sont retournées
                if($count > 0) {
                    while($row = mysqli_fetch_assoc($res)) {
                        $idR = $row['idR'];
                        $nomR = $row['nomR'];
                        $nomi = $row['nomi'];
                        $niveau = $row['niveau'];
                        $typeR = $row['typeR'];
            ?>
            <tr>
                <td><?php echo $idR; ?></td>
                <td><?php echo $nomR; ?></td>
                <td>
                    <?php
                    // Vérification si une image est disponible
                    if($nomi != "") {
                    ?>
                    <img src="<?php echo SITEURL; ?>images/recette/<?php echo $nomi; ?>" width="100px">
                    <?php
                    } else {
                        echo "<div class='error'>Image not Added.</div>";
                    }
                    ?>
                </td>
                <td><?php echo $niveau; ?></td>
                <td><?php echo $typeR; ?></td>
                <td>
                    <!-- Liens pour mettre à jour ou supprimer une recette -->
                    <a href="<?php echo SITEURL; ?>admin/updaterecette.php?idR=<?php echo $idR; ?>" class="status delivered" style="text-decoration: none;">Update </a>
                    <a href="<?php echo SITEURL; ?>admin/deleterecette.php?idR=<?php echo $idR; ?>&nomi=<?php echo $nomi; ?>" class="status return" style="text-decoration: none;">delete</a>
                </td>
            </tr>
            <?php
                    }
                } else {
                    // Aucune donnée dans la base de données
                }
            }
            ?>
        </table>
    </div>
</div>
<!-- Pied de page -->
<?php include('partials/footer1.php'); ?>
