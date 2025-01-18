<?php 
    //Include Constants File
    include('../config/constants.php');

    //echo "Delete Page";
    //Check whether the id and image_name value is set or not
    if(isset($_GET['idR']) AND isset($_GET['nomi']))
    {
        //Get the Value and Delete
        //echo "Get Value and Delete";
        $idR = $_GET['idR'];
        $nomi = $_GET['nomi'];

        //Remove the physical image file is available
        if($nomi != "")
        {
            //Image is Available. So remove it
            $path = "../images/recette/".$nomi;
            //REmove the Image
            $remove = unlink($path);

            //IF failed to remove image then add an error message and stop the process
            if($remove==false)
            {
                //Set the SEssion Message
                $_SESSION['remove'] = "<div class='error'>Failed to Remove Category Image.</div>";
                //REdirect to Manage Category page
                header('location:'.SITEURL.'admin/manage-recette.php');
                //Stop the Process
                die();
            }
        }

        //Delete Data from Database
        //SQL Query to Delete Data from Database
        $sql = "DELETE FROM recette WHERE idR=$idR";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether the data is delete from database or not
        if($res==true)
        {
            //SEt Success MEssage and REdirect
            $_SESSION['delete'] = "<div class='success'>Recette Deleted Successfully.</div>";
            //Redirect to Manage Category
            //header('location:'.SITEURL.'admin/manage-recette.php');
        }
        else
        {
            //SEt Fail MEssage and Redirecs
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Category.</div>";
            //Redirect to Manage Category
            //header('location:'.SITEURL.'admin/manage-rectte.php');
        }

 

    }
    else
    {
        //redirect to Manage Category Page
        //header('location:'.SITEURL.'admin/managerecette.php');
    }
?>