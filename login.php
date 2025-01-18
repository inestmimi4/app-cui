<?php include('config/constants.php'); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login Form</title>
    
    <link rel="stylesheet" href="css/style2.css">
   
</head>




<body>
    <div class="wrapper">
        <form action="" method="POST">
            <h1>Login</h1><br>
            <?php
            // Afficher le message d'erreur ou de succès
            if(!empty($message)) {
                echo "<p>$message</p>";
            }
            ?>
            <div class="input-box">
                <input type="text" name="username" placeholder="username" required>
                <i class='bx bxs-user'></i>
                
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="password" required>
                <i class='bx bxs-lock-alt' ></i>
                
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>

            </div>

            <button type="submit" name="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </div>
        </form>

    </div>
    <?php
    $message = "";
    if(isset($_POST['submit'])) {
        
        
        $username = $_POST['username'];
        $password = md5($_POST['password']); 

        $sql = "SELECT * FROM users WHERE nom_user='$username' AND passwordd='$password'";
        
       
        $res = mysqli_query($conn, $sql);
        
        if($res) {
            
            if(mysqli_num_rows($res) > 0) {
                
                $message ="Connexion réussie!";
                header('location:'.SITEURL.'index.php');
            } else {
                $message = "Nom d'utilisateur ou mot de passe incorrect!";
                header('location:'.SITEURL.'index.php');
            }
        } else {
            echo "Erreur: " . mysqli_error($conn);
        }
    }
?>

</body>

</html>
