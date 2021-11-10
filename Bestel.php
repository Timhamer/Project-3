<table border="1"><tr><th>id</th><th>Aantal</th><th>Naam</th><th>Adres</th><th>E-mail</th><th>Telefoonnummer</th></tr>
<?php
$mysqli = new mysqli("localhost","root","","biermanagement");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM bestelformulier ORDER BY Aantal";

if ($result = $mysqli->query($sql)) {
  foreach ($result as $row) {
    echo "
    <tr>
        <td>" . $row['id'] . "</td> 
        <td>" . $row['Aantal'] . "</td> 
        <td>" . $row['Voornaam']  .  ' ' . $row['Tussenvoegsel'] . ' ' . $row['Achternaam'] . "</td>
        <td> " . $row['Adres'] . ' ' . $row['Postcode'] . "</td>
        <td>". $row['E-mail'] . "</td>
        <td> " . $row['Telefoonnummer'] . "</td>
    </tr>";
  }
  $result -> free_result();
}


$mysqli -> close();
?>
</table>

<?php


    $mysqli = new mysqli("localhost","root","","biermanagement");
    
    if ( $mysqli->connect_error ) {
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
    }
    
    $sql = "INSERT INTO `bestelformulier`(`Aantal`, `Voornaam`, `E-mail`, `Tussenvoegsel`, `Adres`, `Achternaam`, `Postcode`, `Telefoonnummer`) VALUES (?,?,?,?,?,?,?,?)";
    $_POST['Aantal'] ?? 0;

    $insert = $mysqli->prepare($sql);
    $insert->bind_param('isssssss', $_POST['Aantal'], $_POST['Voornaam'], $_POST['E-mail'], $_POST['Tussenvoegsel'], $_POST['Adres'], $_POST['Achternaam'], $_POST['Postcode'], $_POST['Telefoonnummer']);
    
    
    if ($insert->execute())  {
        echo "Succes! Row ID: {$mysqli->insert_id}";
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
    
    $mysqli->close();
     ?>