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

                     <h3>Add recette</h3>
                        <input type="text" name="nom" placeholder="Nom Recette" class="box">
                        
                    
                        
                  
                        <input type="text" name="niveau" placeholder="Niveau Recette"class="box">
                  
                       <input type="text" name="type" placeholder="Type Recette" class="box">
                       <input type="file" name="image" class="box" > 
                    
                        <input type="submit" name="submit" value="Add Recette" class="btn" >
                    
         
        </form>
        </section>
        <!-- Add CAtegory Form Ends -->

        <?php 
        ob_start();
           
            if(isset($_POST['submit']))
            {
               
                $nom = $_POST['nom'];

               
                $niveau = $_POST['niveau'];
                $type = $_POST['type'];
                

                if(isset($_FILES['image']['name']))
                {
                   
                    $image_name = $_FILES['image']['name'];
                    
                    
                    if ($image_name != "") {
                       
                        $image_name_parts = explode('.', $image_name);
                        $ext = end($image_name_parts);
                    
                        //Rename the Image
                        $image_name = "Food_Category_" . rand(000, 999) . '.' . $ext;
                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/recette/".$image_name;

                        //Finally Upload the Image
                        $upload = move_uploaded_file($source_path, $destination_path);

                        
                        if($upload==false)
                        {
                            //SEt message
                            $_SESSION['upload'] = "<div class='error'>Failed to Upload Image. </div>";
                            //Redirect to Add CAtegory Page
                            //header('location:'.SITEURL.'admin/addrecette.php');
                            //STop the Process
                            die();
                        }

                    }
                }
                else
                {
                   
                    $image_name="";
                }

                
                $sql = "INSERT INTO recette SET 
                    nomR='$nom',
                    nomi='$image_name',
                    niveau='$niveau',
                    typeR='$type'
                   
                ";

                
                $res = mysqli_query($conn, $sql);

                
                if($res==true)
                {
                    
                    $_SESSION['add'] = "<div class='success'>Recette Added Successfully.</div>";
                    //Redirect to Manage Category Page
                    //header('location:'.SITEURL.'admin/manage-recette.php');
                }
                else
                {
                    //Failed to Add CAtegory
                    $_SESSION['add'] = "<div class='error'>Failed to Add Recette.</div>";
                    //Redirect to Manage Category Page
                    //header('location:'.SITEURL.'admin/addrecette.php');
                }
            }
            ob_end_flush();
        ?>

    </div>
</div>

<?php include('partials/footer1.php'); ?>