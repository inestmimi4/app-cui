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
               <h3>Add Equipemnt</h3>
          
                        <input type="text" name="IdE" placeholder="identifiant equipement" class="box">
                   
                        <input type="text" name="IdR" placeholder="identifiant recette de cet equipement" class="box">
                  
                        <input type="text" name="nom" placeholder="nom equipement" class="box">
                   
                        <input type="submit" name="submit" value="Add equipement" class="btn">
                  

        </form>
        </section>
        

        <?php 
        
            
            if(isset($_POST['submit']))
            {
                
                $IdE= $_POST['IdE'];
                $IdR= $_POST['IdR'];
                $nom = $_POST['nom'];
               
           


                $sql = "INSERT INTO equipement SET 
                    idE='$IdE',
                    idR='$IdR',
                    nomE='$nom',
                    
                ";

                //3. Execute the Query and Save in Database
                $res = mysqli_query($conn, $sql);

                //4. Check whether the query executed or not and data added or not
                if($res==true)
                {
                    //Query Executed and Category Added
                    $_SESSION['add'] = "<div class='success'>Equipement Added Successfully.</div>";
                    //Redirect to Manage Category Page
                    //header('location:'.SITEURL.'admin/manage-equipement.php');
                }
                else
                {
                    //Failed to Add CAtegory
                    $_SESSION['add'] = "<div class='error'>Failed to Add Equipement.</div>";
                    //Redirect to Manage Category Page
                    //header('location:'.SITEURL.'admin/add-equipement.php');
                }
            }
        
        ?>

    </div>
</div>

<?php include('partials/footer1.php'); ?>