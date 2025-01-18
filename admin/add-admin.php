<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
      

        <br><br>

        <?php 
            if(isset($_SESSION['add'])) //Checking whether the SEssion is Set of Not
            {
                echo $_SESSION['add']; //Display the SEssion Message if SEt
                unset($_SESSION['add']); //Remove Session Message
            }
        ?>

      <section class="add-products">
        <form action="" method="POST" enctype="multipart/form-data">
        <h3>Add admin</h3>
           
                        <input type="text" name="full_name" placeholder="Enter Your Name" class="box">
                        <input type="text" name="username" placeholder="Your Username" class="box">
                  
                        <input type="password" name="password" placeholder="Your Password" class="box">
                   
                        <input type="submit" name="submit" value="Add Admin"  class="btn">
                    
        </form>
      </section>


    </div>
</div>

<?php include('partials/footer1.php'); ?>


<?php 
    //Process the Value from Form and Save it in Database

    //Check whether the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        // Button Clicked
        //echo "Button Clicked";

        //1. Get the Data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Password Encryption with MD5

        //2. SQL Query to Save the data into database
        $sql = "INSERT INTO adminn SET 
            full_name='$full_name',
            username='$username',
            password='$password'
        ";
 
        //3. Executing Query and Saving Data into Datbase
        $res = mysqli_query($conn, $sql) ;

        //4. Check whether the (Query is Executed) data is inserted or not and display appropriate message
        if($res==TRUE)
        {
            //Data Inserted
            //echo "Data Inserted";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='success'>Admin Added Successfully.</div>";
            //Redirect Page to Manage Admin
           // header("location:".SITEURL.'admin/manage-admin.php');
        }
        else
        {
            //FAiled to Insert DAta
            //echo "Faile to Insert Data";
            //Create a Session Variable to Display Message
            $_SESSION['add'] = "<div class='error'>Failed to Add Admin.</div>";
            //Redirect Page to Add Admin
            //header("location:".SITEURL.'admin/add-admin.php');
        }

    }
    
?>