<?php include('config/constants.php'); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    
    <title>Login Form</title>
    
    <link rel="stylesheet" href="css/style2.css">
   
</head>
<?php
   
   $message = "";

   // Vérifier si le formulaire d'inscription a été soumis
   if(isset($_POST['submit'])) {
       
       // Récupérer les valeurs du formulaire
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password = md5($_POST['password']); // Assurez-vous que vous utilisez une méthode de hachage sécurisée
       $confirmPassword = md5($_POST['confirmpassword']); // Assurez-vous que vous utilisez une méthode de hachage sécurisée

       // Vérifier si les mots de passe correspondent
       if($password !== $confirmPassword) {
           $message = "Les mots de passe ne correspondent pas!";
       } else {
           // Requête SQL pour insérer les informations dans la base de données
           $sql = "INSERT INTO users (nom_user, email_user, passwordd) VALUES ('$username', '$email', '$password')";
           
           // Exécuter la requête
           $res = mysqli_query($conn, $sql);
           
           // Vérifier si l'insertion a réussi
           if($res) {
               $message = "Inscription réussie!";
           } else {
               // Erreur dans l'exécution de la requête SQL
               $message = "Erreur lors de l'inscription: " . mysqli_error($conn);
           }
       }
   }
?>




<body>
    <div class="wrapper">
        <form action="" method="POST">
            <h1>Register Now</h1><br>
            <?php
            // Afficher le message d'erreur ou de succès
            if(!empty($message)) {
                echo "<p>$message</p>";
            }
            ?>
            <div class="input-box">
                <input type="text" name="username" placeholder="enter your name" required>
                <i class='bx bxs-user'></i>
                
            </div>
            
            <div class="input-box">
                <input type="email" name="email" placeholder="enter your email" required>
                <i class='bx bxs-lock-alt' ></i>
                
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="enter your password" required>
                <i class='bx bxs-lock-alt' ></i>
                
            </div>
            <div class="input-box">
                <input type="password" name="confirmpassword" placeholder="confirm your password" required>
                <i class='bx bxs-lock-alt' ></i>
                
            </div>

            

            <button type="submit" name="submit" class="btn">Register now</button>

            <div class="register-link">
                <p>already have an account? <a href="login.php">login now </a></p>
            </div>
        </form>

    </div>

</body>

</html>
