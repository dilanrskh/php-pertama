<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftarkan Email Dirimu</title>
</head>
<body>

   <?php

      $emailerror = "";
      $email = "";

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['email'])){
        $emailerror = "Emailnya kosong oi";
        }else{
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $emailerror = "Email belum valid yeaa";
        }
      }

      ?>


    

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
       <label>Masuk Email</label> <br>
       <input type="email" name="email"> <br> 
       <span style="color: red;"><?php echo "*" .  $emailerror ?></span>
       <br>
       <input type="submit" value="save">

    </form>

    <p>Email terdaftarkan :</p>
    <?php echo $email; ?>

    
</body>
</html>