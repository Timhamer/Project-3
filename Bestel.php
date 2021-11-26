

<?php
if(!$_POST){
  (header("location: Bestel.html"));
}
    $mysqli = new mysqli("localhost","root","","biermanagement");
    
    if ( $mysqli->connect_error ) {
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
    }
    
    $sql = "INSERT INTO `bestelformulier`(`Aantal`, `Voornaam`, `E-mail`, `Tussenvoegsel`, `Adres`, `Achternaam`, `Postcode`, `Telefoonnummer`) VALUES (?,?,?,?,?,?,?,?)";
    $_POST['Aantal'] ?? 0;

    $insert = $mysqli->prepare($sql);
    $insert->bind_param('issssssi', $_POST['Aantal'], $_POST['Voornaam'], $_POST['E-mail'], $_POST['Tussenvoegsel'], $_POST['Adres'], $_POST['Achternaam'], $_POST['Postcode'], $_POST['Telefoonnummer']);
    
    
    if ($insert->execute())  {
        echo "
          <center>
       S     <body style='font-size:x-large;'>
           Uw bestelling is succesvol verstuurd.
            <br>
            <strong>Bedankt voor uw bestelling<strong>
              <br>
            </div>
          </center>";

          $naam = $_POST['Voornaam'];
          $onderwerp = "BierDeBoer";
          $mailFrom = $_POST['projectbierdeboer@gmail.com'];
          $telefoonnr = $_POST['0622617028'];
          $aantal = $_POST['Aantal'];
         //klant
          $To = 'tfhammersma@gmail.com';
          $mailTo = $_POST["E-mail"];
          $headers = "From: ".$mailFrom;
          $txt = "je hebt een mail gekregen van de bierman";
          $txtaantal = "je hebt ".$aantal." biertjes bestelt.";
         
          //bierman
          $tekst = $naam." heeft ".$aantal." biertjes bestelt";
      
          mail($To, $onderwerp, $tekst,);
         

          mail($mailTo, $onderwerp, $txt, $txtaantal);
         header("Location: Bestellen.php?mailsend");
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
    
    $mysqli->close();


    //------------------------------------------------------------------------
    


    
     ?>

