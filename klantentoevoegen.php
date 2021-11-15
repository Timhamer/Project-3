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
    
    <?php
    $error_message = "";$success_message = "";

    if(isset($_POST['btnsignup'])){
        $factuuradres = trim($_POST['Factuuradres']);
        $postcode = trim($_POST['Postcode']);
        $tel = trim($_POST['Tel']);
        $email = trim($_POST['Email']);
        $adres = trim($_POST['Adres']);
        $bedrijfsnaam = trim($_POST['Bedrijfsnaam']);
        $wachtwoord = trim($_POST['Wachtwoord']);

        $isValid = true;

        if($factuuradres == ''|| $postcode == '' || $tel == '' || $email == '' || $adres == '' || $bedrijfsnaam == '' || $wachtwoord == ''){
        $isValid = false;
        $error_message = "Vul alle velden in.";
        }

        if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $isValid = false;
            $error_message = "E-mail is niet geldig.";
        }

        if($isValid){

            $stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
            $stmt -> bind_param("s", $email);
            $stmt -> execute();
            $result = $stmt->get_result();
            $stmt->close();
            if($result->num_rows > 0){
                $isValid - false;
                $error_message = "Email bestaat al";
            }
        }

        if($isValid){
            $insertSQL = "INSERT INTO users(Factuuradres,Postcode,Tel,Email,Adres,Naam,Wachtwoord ) values(?,?,?,?,?,?,?)";
            $stmt = $con-> prepare($insertSQL);
            $stmt->bind_param("sssssss", $factuuradres,$postcode,$tel,$email,$adres,$bedrijfsnaam,$wachtwoord);
            $stmt -> execute();
            $stmt -> close();
            
            $success_message = "Account aangemaakt.";
        }

    }
    ?>
</head>
<body>

    <form method="post" action="">
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

<div class="blok">
    <div>
         <h2 class="bedrijf_gegevens">Bedrijf Gegevens</h2><br>  
        <input type="text" name="Factuuradres" class="bedrijfsnaam" placeholder="Factuuradres"><br><br>
        <input type="text" name="Postcode" class="bedrijfsnaam" placeholder="Postcode"><br><br>
        <input type="text" name="Tel" class="bedrijfsnaam" placeholder="Telefoon nummer"><br><br>
        <input type="text" name="Email" class="bedrijfsnaam" placeholder="E-mail"><br><br>
        <input type="text" name="Adres" class="bedrijfsnaam" placeholder="Adres"><br><br>
   
      
    <h2 class="inlog_gegevens">Inlog Gegevens</h2><br>
        <input type="text" name="Bedrijfsnaam" class="bedrijfsnaam" placeholder="Bedrijfsnaam"><br><br>
        <input type="password" name="Wachtwoord" class="password" placeholder="Wachtwoord"><br><br>
            <h4 class="wachtwoord_eisen">- Hoofdletter</h4>
            <h4 class="wachtwoord_eisen">- Speciaal teken</h4>
            <h4 class="wachtwoord_eisen">- 8 Caracters</h4><br><br><br>
            <button type="submit" name="btnsignup" class="klant-toevoegen">Voeg toe</button>
    </div>
</div>

</body>
</html>
