<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Recette</h1>

        <br /><br />
        <?php 
        
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }

            if(isset($_SESSION['remove']))
            {
                echo $_SESSION['remove'];
                unset($_SESSION['remove']);
            }

            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }

            if(isset($_SESSION['no-category-found']))
            {
                echo $_SESSION['no-category-found'];
                unset($_SESSION['no-category-found']);
            }

            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            }

            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }

            if(isset($_SESSION['failed-remove']))
            {
                echo $_SESSION['failed-remove'];
                unset($_SESSION['failed-remove']);
            }
        
        ?>
        <br><br>

                <!-- Button to Add Admin -->
                <a href="<?php echo SITEURL; ?>admin/addrecette.php" class="btn-primary">Add Recette</a>

                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>R.N.</th>
                        <th>IR</th>

                        <th>Nom</th>
                        <th>Image</th>
                        
                        <th>Niveau</th>
                        <th>Type</th>
                        
                    </tr>

                    <?php 

                        //Query to Get all CAtegories from Database
                        $sql = "SELECT * FROM recette";

                        //Execute Query
                        $res = mysqli_query($conn, $sql);

                        //Count Rows
                        $count = mysqli_num_rows($res);

                        //Create Serial Number Variable and assign value as 1
                        $sn=1;

                        //Check whether we have data in database or not
                        if($count>0)
                        {
                            //We have data in database
                            //get the data and display
                            while($row=mysqli_fetch_assoc($res))
                            {
                                $idR = $row['idR'];
                                $nomR = $row['nomR'];
                                $nomi= $row['nomi'];
                                $niveau = $row['niveau'];
                                $typeR = $row['typeR'];

                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $idR; ?>. </td>
                                        <td><?php echo $nomR; ?></td>

                                        <td>

                                            <?php  
                                                //Chcek whether image name is available or not
                                                if($nomi!="")
                                                {
                                                    //Display the Image
                                                    ?>
                                                    
                                                    <img src="<?php echo SITEURL; ?>images/recette/<?php echo $nomi; ?>" width="100px" >
                                                    
                                                    <?php
                                                }
                                                else
                                                {
                                                    //DIsplay the MEssage
                                                    echo "<div class='error'>Image not Added.</div>";
                                                }
                                            ?>

                                        </td>

                                        <td><?php echo $niveau; ?></td>
                                        <td><?php echo $typeR; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL; ?>admin/updaterecette.php?idR=<?php echo $idR; ?>" class="btn-secondary">Update Recette</a>
                                            <a href="<?php echo SITEURL; ?>admin/deleterecette.php?idR=<?php echo $idR; ?>&nomi=<?php echo $nomi; ?>" class="btn-danger">Delete Recette</a>
                                        </td>
                                    </tr>

                                <?php

                            }
                        }
                        else
                        {
                            //WE do not have data
                            //We'll display the message inside table
                            ?>

                            <tr>
                                <td colspan="6"><div class="error">No Category Added.</div></td>
                            </tr>

                            <?php
                        }
                    
                    ?>

                    

                    
                </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>