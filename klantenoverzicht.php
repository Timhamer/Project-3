<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KlantenOverzicht</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body>
<div class="container">
<div class="row">
<div class="blok">
    <div class="col-md-6">
    <div>

    <form method="post" action="">

         <h2 class="bedrijf_gegevens">Bedrijf Gegevens</h2><br>  
         <?php 
         if(!empty($error_message)){
         ?>
         <div class="alert alert-danger">
             <strong>Error!</strong> <?= $error_message ?>
         </div>
        <?php
        }
        ?>

        <?php 
         if(!empty($success_message)){
         ?>
         <div class="alert alert-danger">
             <strong>Success!</strong> <?= $success_message ?>
         </div>
        <?php
        }
        ?>

        <div class="form-group">
        <label for='Factuuradres'></label>
        <input type="text" class="form-control" name="factuuradres" id=factuuradres placeholder="Factuuradres" required="required">
        </div>
        <input type="text" class="form-control" placeholder="Postcode"><br><br>
        <input type="text" class="form-control" placeholder="Telefoon nummer"><br><br>
        <input type="text" class="form-control" placeholder="E-mail"><br><br>
        <input type="text" class="form-control" placeholder="Adres"><br><br>
   
      
    <h2 class="inlog_gegevens">Inlog Gegevens</h2><br>
        <input type="text" class="form-control" placeholder="Bedrijfsnaam"><br><br>
        <input type="text" class="form-control" placeholder="Wachtwoord"><br><br>
            <h4 class="wachtwoord_eisen">- Hoofdletter</h4>
            <h4 class="wachtwoord_eisen">- Speciaal teken</h4>
            <h4 class="wachtwoord_eisen">- 8 Caracters</h4><br><br><br>
            <button class="klant-toevoegen">Voeg toe</button>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>
