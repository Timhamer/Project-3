<?php
if(!$_POST){
  (header("location: bestel.html"));
}
    $mysqli = new mysqli("localhost","root","","biermanagement");
    
    if ( $mysqli->connect_error ) {
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
    }
    
    $sql = "INSERT INTO `bestelformulier`(`Aantal`, `Voornaam`, `E-mail`, `Tussenvoegsel`, `Adres`, `Achternaam`, `Postcode`, `Telefoonnummer`) VALUES (?,?,?,?,?,?,?,?)";
    $_POST['Voornaam'] ?? 0;
    $_POST['E-mail'] ?? 0;
    $_POST['Tussenvoegsel'] ?? 0;
    $_POST['Achternaam'] ?? 0;
    $_POST['Postcode'] ?? 0;
    $_POST['Telefoonnummer'] ?? 0;
    echo $sql;
    
    $insert = $mysqli->prepare($sql);
    $insert->bind_param('ssssssss', $_POST['Aantalklant'], $_POST['Voornaam'], $_POST['E-mail'], $_POST['Tussenvoegsel'], $_POST['Adresklant'], $_POST['Achternaam'], $_POST['Postcode'], $_POST['Telefoonnummer']);
    
    
    if ($insert->execute())  {
        echo "
          <center>
            <body style='font-size:x-large;'>
           Uw bestelling is succesvol verstuurd.
            <br>
            <strong>Bedankt voor uw bestelling<strong>
              <br>
            </div>
          </center>";
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
    
    $mysqli->close();
     ?>