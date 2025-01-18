<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        

        <br><br>

        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        
        ?>

        <br><br>

        <!-- Add CAtegory Form Starts -->
        <section class="add-products">
        <form action="" method="POST" enctype="multipart/form-data">
        <h3>Add Ingredient</h3>
            <table class="tbl-30">
               
                        <input type="text" name="nom" placeholder="Nom Ingredient" class="box" >
                 
                        <input type="text" name="unitemes" placeholder="unite de l'ingredient" class="box">
                   
                    
                        <input type="text" name="nbcalorie" placeholder="nbre de calories" class="box">
                   
                       <input type="text" name="type" placeholder="type ingredient" class="box"> 
                   
                    
                        <input type="submit" name="submit" value="Add Ingredient" class="btn" >
                   

            </table>

        </form>
        </section>
        

        <?php 
        
            
            if(isset($_POST['submit']))
            {
                
                $nom = $_POST['nom'];
                $unitemes= $_POST['unitemes'];
                $nbcalorie = $_POST['nbcalorie'];
                $type = $_POST['type'];
           


                $sql = "INSERT INTO ingredient SET 
                    nomI='$nom',
                    unitemesure='$unitemes',
                    nbrcalorie='$nbcalorie',
                    typeI='$type'
                ";

                //3. Execute the Query and Save in Database
                $res = mysqli_query($conn, $sql);

                //4. Check whether the query executed or not and data added or not
                if($res==true)
                {
                    //Query Executed and Category Added
                    $_SESSION['add'] = "<div class='success'>Ingredient Added Successfully.</div>";
                    //Redirect to Manage Category Page
                    //header('location:'.SITEURL.'/admin/manage-ingredient.php');
                    exit();
                }
                else
                {
                    //Failed to Add CAtegory
                    $_SESSION['add'] = "<div class='error'>Failed to Add Ingredient.</div>";
                    //Redirect to Manage Category Page
                    //header('location:'.SITEURL.'admin/add-ingrediant.php');
                    exit();
                }
            }
        
        ?>

    </div>
</div>

<?php include('partials/footer1.php'); ?>