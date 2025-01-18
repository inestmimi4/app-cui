<?php include('partials/menu.php'); ?>

<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
        
            <h2>Manage Equipement</h2>
          
             <a href="<?php echo SITEURL; ?>admin/add-equipement.php" class="btnn">Add Equipemnt</a>
        </div>

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
                
                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>I.N.</th>
                        <th>Id</th>
                        <th>IdR</th>
                        <th>Nom</th>
                        

                        
                        
                
                        
                    </tr>

                    <?php 

                        //Query to Get all CAtegories from Database
                        $sql = "SELECT * FROM equipement";

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
                                $idE = $row['idE'];
                                $nomE = $row['nomE'];
                               
                                $idR = $row['idR'];

                                ?>

                                    <tr>
                                        <td><?php echo $sn++; ?>. </td>
                                        <td><?php echo $idE; ?></td>
                                        <td><?php echo $idR; ?></td>
                                        <td><?php echo $nomE; ?></td>
                                        
                                        <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-equiement.php?idE=<?php echo $idE; ?>"  class="status delivered" style="text-decoration: none;">Update</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-delete.php?idE=<?php echo $idE; ?> " class="status return" style="text-decoration: none;">delete</a>
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
                                <td colspan="6"><div class="error">No Equipement Added.</div></td>
                            </tr>

                            <?php
                        }
                    
                    ?>

                    

                    
                </table>
    </div>
    
</div>

<?php include('partials/footer1.php'); ?>