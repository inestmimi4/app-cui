<?php 
    
    include('../config/constants.php');

    
    if(isset($_GET['idR']) )
    {
       
        $id = $_GET['idR'];
        
       
        $sql = "DELETE FROM ing_recette WHERE idR=$id";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether the data is delete from database or not
        if($res==true)
        {
            //SEt Success MEssage and REdirect
            $_SESSION['delete'] = "<div class='success'>Ing_recette Deleted Successfully.</div>";
            //Redirect to Manage Category
            header('location:'.SITEURL.'admin/manage-ing-recette.php');
        }
        else
        {
            //SEt Fail MEssage and Redirecs
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Ingredient.</div>";
            //Redirect to Manage Category
            header('location:'.SITEURL.'admin/manage-ing-recette.php');
        }

 

    }
    else
    {
        //redirect to Manage Category Page
        header('location:'.SITEURL.'admin/manage-ing-recette.php');
    }
?>