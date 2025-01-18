<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Ingrecette</h1>

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
        <form action="" method="POST" enctype="multipart/form-data">

            <table class="tbl-30">
                <tr>
                    <td>IdR: </td>
                    <td>
                        <input type="text" name="idrr" placeholder="identifiant recette">
                    </td>
                </tr>

                <tr>
                    <td>idI: </td>
                    <td>
                        <input type="text" name="idii" placeholder="identifiant de ingredient">
                    </td>
                </tr>

                <tr>
                    <td>Quantite: </td>
                    <td>
                        <input type="text" name="qtt" placeholder="quantite">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Ing-recette" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
        

        <?php 
        
            
            if(isset($_POST['submit']))
            {
                
                $idrr = $_POST['idr'];
                $idii= $_POST['idi'];
                $qtt = $_POST['qt'];
               
           


                $sql = "INSERT INTO ing_recette SET 
                    idR=$idrr,
                    idI=$idii,
                    quantite=$qtt,
                    
                ";

                //3. Execute the Query and Save in Database
                $res = mysqli_query($conn, $sql);

                //4. Check whether the query executed or not and data added or not
                if($res==true)
                {
                    //Query Executed and Category Added
                    $_SESSION['add'] = "<div class='success'>Ingredient Added Successfully.</div>";
                    //Redirect to Manage Category Page
                    header('location:'.SITEURL.'admin/manage-ing-recette.php');
                }
                else
                {
                    //Failed to Add CAtegory
                    $_SESSION['add'] = "<div class='error'>Failed to Add Ingredient.</div>";
                    //Redirect to Manage Category Page
                    header('location:'.SITEURL.'admin/add-ingrerecette.php');
                }
            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>