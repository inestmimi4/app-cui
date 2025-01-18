<?php 
    
    include('../config/constants.php');

    
    if(isset($_GET['idI']) )
    {
       
        $id = $_GET['idI'];
        $nomI = $_GET['nomI'];
       
        $sql = "DELETE FROM ingredient WHERE idI=$id";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether the data is delete from database or not
        if($res==true)
        {
            //SEt Success MEssage and REdirect
            $_SESSION['delete'] = "<div class='success'>Ingredient Deleted Successfully.</div>";
            //Redirect to Manage Category
            header('location:'.SITEURL.'admin/manage-ingredient.php');
        }
        else
        {
            //SEt Fail MEssage and Redirecs
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Ingredient.</div>";
            //Redirect to Manage Category
            header('location:'.SITEURL.'admin/manage-ingredient.php');
        }

 

    }
    else
    {
        //redirect to Manage Category Page
        header('location:'.SITEURL.'admin/manage-ingredient.php');
    }
?>