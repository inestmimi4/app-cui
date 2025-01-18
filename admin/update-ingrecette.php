<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Ing-recette</h1>

        <br><br>


        <?php 
        
            
            if(isset($_GET['idE']))
            {
                
                $idE = $_GET['idE'];
               
                $sql = "SELECT * FROM ing_recette WHERE idE=$idE";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count the Rows to check whether the id is valid or not
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    
                    $row = mysqli_fetch_assoc($res);
                    $nom = $row['nomI'];
                    $unitemes = $row['unitemesure'];
                    $nbcalo= $row['nbrcalorie'];
                    $type = $row['typeI'];
                }
                else
                {
                    //redirect to manage category with session message
                    $_SESSION['no-category-found'] = "<div class='error'>Ingredient not Found.</div>";
                    header('location:'.SITEURL.'admin/manage-ingredient.php');
                }

            }
            else
            {
                //redirect to Manage CAtegory
                header('location:'.SITEURL.'admin/manage-ingredient.php');
            }
        
        ?>

        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>Nom: </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $nom; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Unitemesure: </td>
                    <td>
                        <input type="text" name="unitemes" value="<?php echo $unitemes; ?>">
                    </td>
                </tr>

                <tr>
                    <td>nbrcalorie: </td>
                    <td>
                        <input type="text" name="nbrcalo" value="<?php echo $nbcalo; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Type: </td>
                    <td>
                        <input type="text" name="type" value="<?php echo $type; ?>">
                    </td>
                </tr>

                <tr>
                    <td>
                       
                        <input type="hidden" name="idI" value="<?php echo $idI; ?>">
                        <input type="submit" name="submit" value="Update ingredient" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        <?php 
        
            if(isset($_POST['submit']))
            {
                //echo "Clicked";
                //1. Get all the values from our form
                $idI = $_POST['idI'];
                $nom = $_POST['nom'];
                $unit = $_POST['unitemes'];
                $nbcalo = $_POST['nbrcalo'];
                $type = $_POST['type'];

               
                //3. Update the Database
                $sql2 = "UPDATE ingredient SET 
                    nomI = '$nom',
                    unitemesure = '$unit',
                    nbrcalorie = '$nbcalo',
                    typeI = '$type' 
                    WHERE idI=$idI
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //4. REdirect to Manage Category with MEssage
                //CHeck whether executed or not
                if($res2==true)
                {
                    //Category Updated
                    $_SESSION['update'] = "<div class='success'>Ingredient Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-ingredient.php');
                }
                else
                {
                    //failed to update category
                    $_SESSION['update'] = "<div class='error'>Failed to Update Ingredient.</div>";
                    header('location:'.SITEURL.'admin/manage-ingredient.php');
                }

            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>