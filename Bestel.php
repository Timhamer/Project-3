

<?php
if(!$_POST){
  (header("location: bestel.html"));
}
    $mysqli = new mysqli("localhost","root","","biermanagement");
    
    if ( $mysqli->connect_error ) {
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
    }
    
    $sql = "INSERT INTO `bestelformulier`(`Aantal`, `Voornaam`, `E-mail`, `Tussenvoegsel`, `Adres`, `Achternaam`, `Postcode`, `Telefoonnummer`) VALUES (?,?,?,?,?,?,?,?)";
    $_POST['Aantal'] ?? 0;

    $insert = $mysqli->prepare($sql);
    $insert->bind_param('isssssss', $_POST['Aantal'], $_POST['Voornaam'], $_POST['E-mail'], $_POST['Tussenvoegsel'], $_POST['Adres'], $_POST['Achternaam'], $_POST['Postcode'], $_POST['Telefoonnummer']);
    
    
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
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
    
    $mysqli->close();


    
    if (isset($_POST['submit'])) {
      $naam = $_POST['Voornaam'];
      $onderwerp = $_POST['BierDeBoer'];
      $mailFrom = $_POST['projectbierdeboer@gmail.com'];
      $telefoonnr = $_POST['0622617028'];
      $aantal = $_POST['Aantal'];


      $mailTo = $_POST["E-mail"];
      $headers = "From: ".$mailFrom;
      $txt = "je hebt een e-mail gekregen van BierDeBoer.com".\n\n".$telefoonnr";
      $txtaantal = "je hebt ".$aantal." biertjes bestelt."
  
      mail($mailTo, $onderwerp, $txt, $txtaantal);
      header("Location: Bestel.html?mailsend");
    }




    
     ?>