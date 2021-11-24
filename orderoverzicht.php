<?php
include "config.php";
include "header.php";
$_ACCOUNTID = $_SESSION['id'];
echo
'<table class="content-table">
        <thead>
          <tr>
            <th>Aantal</th>
            <th>Naam</th>
            <th>Adres</th>
            <th>E-mail</th>
            <th>Telefoonnummer</th>
            
          </tr>
        </thead>';


$mysqli = new mysqli("localhost","root","","biermanagement");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


$sql = "SELECT * FROM bestelformulier WHERE userid = $_ACCOUNTID";
 
  if ($result = $mysqli->query($sql)) {
    foreach ($result as $row) {
    echo "
    <tr>
        <td>" . $row['Aantal'] . "</td> 
        <td>" . $row['Voornaam']  . ' ' . $row['Tussenvoegsel'] .  ' ' . $row['Achternaam'] . "</td>
        <td> " . $row['Adres'] .' <br>' . $row['Postcode'] . "</td>
        <td>". $row['E-mail'] .  "</td>
        <td> " . $row['Telefoonnummer'] . "</td>";
 
         echo "";
      
 
    
 
    }
  $result -> free_result();
}


$mysqli -> close();

  if(isset($_GET))
?>
<!DOCTYPE html>
<head>
  <title>overzicht begheerder</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
   <link rel="stylesheet" href="header.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="overzicht.js">'
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body> 
  
</body>
</html>