

<?php
if(!$_POST){
  (header("location: bestel."));
}
    $mysqli = new mysqli("localhost","root","","biermanagement");
    
    if ( $mysqli->connect_error ) {
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
    }
    
    $sql = "INSERT INTO `bestelformulier`(`Aantal`, `Voornaam`, `E-mail`, `Tussenvoegsel`, `Adres`, `Achternaam`, `Postcode`, `Telefoonnummer`, `Status`) VALUES (?,?,?,?,?,?,?,?,?)";
    $_POST['Aantal'] ?? 0;
    $status = 0;

    $insert = $mysqli->prepare($sql);
    $insert->bind_param('issssssss', $_POST['Aantal'], $_POST['Voornaam'], $_POST['E-mail'], $_POST['Tussenvoegsel'], $_POST['Adres'], $_POST['Achternaam'], $_POST['Postcode'], $_POST['Telefoonnummer'], $status);
    
    
    if ($insert->execute())  {
        echo "
          <center>
            <body style='font-size:x-large;'>
              <strong>Goedzo<strong>
              <br>Uw bestelling is succesvol verstuurd.
              <br>
            </div>
          </center>";
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
    
    $mysqli->close();
     ?>