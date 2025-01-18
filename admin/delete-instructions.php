<?php 
    
    include('../config/constants.php');

    
    if(isset($_GET['idIn']) )
    {
       
        $id = $_GET['idIn'];
        
       
        $sql = "DELETE FROM instructions WHERE idIn=$idIn";

        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //Check whether the data is delete from database or not
        if($res==true)
        {
            //SEt Success MEssage and REdirect
            $_SESSION['delete'] = "<div class='success'>Equipement Deleted Successfully.</div>";
            //Redirect to Manage Category
            header('location:'.SITEURL.'admin/manage-equipement.php');
        }
        else
        {
            //SEt Fail MEssage and Redirecs
            $_SESSION['delete'] = "<div class='error'>Failed to Delete Equipement.</div>";
            //Redirect to Manage Category
            header('location:'.SITEURL.'admin/manage-Equipement.php');
        }

 

    }
    else
    {
        //redirect to Manage Category Page
        header('location:'.SITEURL.'admin/manage-Equipement.php');
    }
?>