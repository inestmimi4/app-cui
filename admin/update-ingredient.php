<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        

        <br><br>


        <?php 
        
            
            if(isset($_GET['idI']))
            {
                
                $idI = $_GET['idI'];
               
                $sql = "SELECT * FROM ingredient WHERE idI=$idI";

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
<section class="add-products">
        <form action="" method="POST" enctype="multipart/form-data">
        <h3>Update Ingredient</h3>

                        <input type="text" name="nom" value="<?php echo $nom; ?>" class="box">
                    
                    
                        <input type="text" name="unitemes" value="<?php echo $unitemes; ?>" class="box">
                   
                        <input type="text" name="nbrcalo" value="<?php echo $nbcalo; ?>" class="box">
                   
                        <input type="text" name="type" value="<?php echo $type; ?>" class="box">
                   
                       
                        <input type="hidden" name="idI" value="<?php echo $idI; ?>" class="box">
                        <input type="submit" name="submit" value="Update ingredient" class="btn">
                  
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

<?php include('partials/footer1.php'); ?>