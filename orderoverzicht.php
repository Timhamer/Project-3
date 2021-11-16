<table border="1"><tr><th>id</th><th>Aantal</th><th>Naam</th><th>Adres</th><th>E-mail</th><th>Telefoonnummer</th><th>Factuur adres</th></tr>
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
        <td>" . $row['Aantal'] . " Flesjes" . "</td> 
        <td>" . $row['Voornaam']  .  ' ' . $row['Tussenvoegsel'] . ' ' . $row['Achternaam'] . "</td>
        <td> " . $row['Adres'] . ' ' . $row['Postcode'] . "</td>
        <td>". $row['E-mail'] . "</td>
        <td> " . $row['Telefoonnummer'] . "</td>
        <td> " . $row['Factuur adres'] . "</td>
    </tr>";
  }
  $result -> free_result();
}


$mysqli -> close();
?>
</table>