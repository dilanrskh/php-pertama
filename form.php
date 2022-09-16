<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <style>
        .error{
            color:red;
        }
    </style>

</head>
<body>
     <?php

     $nameErr = "";
     $nama = ""; 

     if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST["nama"])){
            $nameErr = "Nama nya ngak bolee kosong yeah ";
        }else{
            $nama = $_POST['nama'];
        }
     }

     ?>

      <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label>Nama Lengkap</label> <br>
        <input type="text" name="nama">
        <span class="error">* <?php echo $nameErr; ?> <br>
        <button type="submit">Masuk</button>


      </form>

      <h2>Data Terinput</h2>
      <?php
      print $nama;
      ?>
    
</body>
</html>