<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <br><br><br>

       

        <?php 
        
            //Check whether the id is set or not
            if(isset($_GET['idR']))
            {
                //Get the ID and all other details
                //echo "Getting the Data";
                $idR = $_GET['idR'];
                //Create SQL Query to get all other details
                $sql = "SELECT * FROM recette WHERE idR=$idR";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count the Rows to check whether the id is valid or not
                $count = mysqli_num_rows($res);

                if($count==1)
                {
                    //Get all the data
                    $row = mysqli_fetch_assoc($res);
                    $nom = $row['nomR'];
                    $current_image = $row['nomi'];
                    $niveau= $row['niveau'];
                    $type = $row['typeR'];
                }
                else
                {
                    //redirect to manage category with session message
                    $_SESSION['no-category-found'] = "<div class='error'>Category not Found.</div>";
                    header('location:'.SITEURL.'admin/managerecette.php');
                }

            }
            else
            {
                //redirect to Manage CAtegory
                header('location:'.SITEURL.'admin/managerecette.php');
            }
        
        ?>
        <section class="add-products">
        <form action="" method="POST" enctype="multipart/form-data">
        <h3>Update recette</h3>
            <table class="tbl-30">
                <tr>
                    <td>Nom: </td>
                    <td>
                        <input type="text" name="nomR" value="<?php echo $nom; ?>" class="box">
                    </td>
                </tr>

                <tr>
                    <td>Current Image: </td>
                    <td>
                        <?php 
                            if($current_image != "")
                            {
                                //Display the Image
                                ?>
                                <img src="<?php echo SITEURL; ?>images/recette/<?php echo $current_image; ?>" width="150px">
                                <?php
                            }
                            else
                            {
                                //Display Message
                                echo "<div class='error'>Image Not Added.</div>";
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>New Image: </td>
                    <td>
                        <input type="file" name="image" class="box">
                    </td>
                </tr>

                <tr>
                    <td>Niveau: </td>
                    <td>
                        <input type="text" name="niveau" value="<?php echo $niveau; ?>" class="box">
                    </td>
                </tr>

                <tr>
                    <td>Type: </td>
                    <td>
                        <input type="text" name="type" value="<?php echo $type; ?>" class="box">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>" class="box">
                        <input type="hidden" name="idR" value="<?php echo $idR; ?>" class="box">
                        <input type="submit" name="submit" value="Update recette" class="btn">
                    </td>
                </tr>

            </table>

        </form>
        </section>

        <?php 
        
            if(isset($_POST['submit']))
            {
                //echo "Clicked";
                //1. Get all the values from our form
                $idR = $_POST['idR'];
                $nom = $_POST['nomR'];
                $current_image = $_POST['current_image'];
                $niveau = $_POST['niveau'];
                $type = $_POST['typeR'];
               

                //2. Updating New Image if selected
                //Check whether the image is selected or not
                if(isset($_FILES['image']['name']))
                {
                    //Get the Image Details
                    $image_name = $_FILES['image']['name'];

                    //Check whether the image is available or not
                    if ($image_name != "") {
                        //Auto Rename our Image
                        //Get the Extension of our image (jpg, png, gif, etc) e.g. "specialfood1.jpg"
                        $image_name_parts = explode('.', $image_name);
                        $ext = end($image_name_parts);
                    
                        //Rename the Image
                        $image_name = "Food_Category_" . rand(000, 999) . '.' . $ext; // e.g. Food_Category_834.jpg
                        

                        $source_path = $_FILES['image']['tmp_name'];

                        $destination_path = "../images/recette/".$image_name;

                        //Finally Upload the Image
                        $upload = move_uploaded_file($source_path, $destination_path);

                        //Check whether the image is uploaded or not
                        //And if the image is not uploaded then we will stop the process and redirect with error message
                        if($upload==false)
                        {
                            //SEt message
                            $_SESSION['upload'] = "<div class='error'>Failed to Upload Image. </div>";
                            //Redirect to Add CAtegory Page
                            header('location:'.SITEURL.'admin/manage-recette.php');
                            //STop the Process
                            die();
                        }

                        //B. Remove the Current Image if available
                        if($current_image!="")
                        {
                            $remove_path = "../images/recette/".$current_image;

                            $remove = unlink($remove_path);

                            //CHeck whether the image is removed or not
                            //If failed to remove then display message and stop the processs
                            if($remove==false)
                            {
                                //Failed to remove image
                                $_SESSION['failed-remove'] = "<div class='error'>Failed to remove current Image.</div>";
                                header('location:'.SITEURL.'admin/manage-recette.php');
                                die();//Stop the Process
                            }
                        }
                        

                    }
                    else
                    {
                        $image_name = $current_image;
                    }
                }
                else
                {
                    $image_name = $current_image;
                }

                //3. Update the Database
                $sql2 = "UPDATE recette SET 
                    nomR = '$nom',
                    nomi = '$image_name',
                    niveau = '$niveau',
                    typeR = '$type' 
                    WHERE idR=$idR
                ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //4. REdirect to Manage Category with MEssage
                //CHeck whether executed or not
                if($res2==true)
                {
                    //Category Updated
                    $_SESSION['update'] = "<div class='success'>Category Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/managerecette.php');
                }
                else
                {
                    //failed to update category
                    $_SESSION['update'] = "<div class='error'>Failed to Update Category.</div>";
                    header('location:'.SITEURL.'admin/managerecette.php');
                }

            }
        
        ?>

    </div>
</div>

<?php include('partials/footer1.php'); ?>