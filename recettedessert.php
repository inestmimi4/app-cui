<?php include('partials-front/menu.php'); ?>


<main>
        <div class="menu" id="Menu">
            <h1>Our<span>Dessert</span></h1>
    
            <div class="menu_box">
                <div class="menu_card">
    

                <?php 

                    $sql = "SELECT * FROM recette ";
                     $res = mysqli_query($conn, $sql);
                     $count = mysqli_num_rows($res);
                    
                   if($count>0)
                  {
    
                    while($row=mysqli_fetch_assoc($res))
                     {
        //Get the Values
                        $id = $row['idR'];
                        $nom = $row['nomR'];
                        $image_name = $row['nomi'];
                        $description=$row['desR'];
                 ?>
        
            <div class="menu_image">
                <?php 
                    if($image_name=="")
                    {
                       
                        echo "<div class='error'>Image not found.</div>";
                    }
                    else
                    
                    {
                 ?>
                        <img src="<?php echo SITEURL; ?>images/recette/<?php echo $image_name; ?>" alt="Pizza" class="menu_image">
               
   
    
                </div> 
                <div class="small_card">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                     
                    <div class="menu_info">
 
                                  <p><?php echo $description; ?></p>
        
    

                <?php

                    }
                ?>
                

                

        <?php
    }
}
else
{
    //CAtegories Not Available
    echo "<div class='error'>Category not found.</div>";
}

?>
 <div class="small_card">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                     
                    <div class="menu_info">
 
    <p>
        Savor every bite of this delightful chocolate dessert, a true source of comfort and joy
    </p>
    
    <div class="menu_icon">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star-half-stroke"></i>
    </div>
    <a href="<?php echo SITEURL; ?>search.php" class="menu_btn">Try it</a>
</div>
              
</main> 
<?php include('partials-front/footer.php'); ?>
