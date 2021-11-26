
<?php
error_reporting(0);
include "header2.php";?>

<form method="POST" action= "">
<button type="submit" name="onafgerond" class="button_on" value="false"> Onafgerond </button>
</form>
<form method="POST" action= "">
<button type="submit" name="afgerond" class="button_af" value="true"> Afgerond </button>
</form>
<?php
$mysqli = new mysqli("localhost","root","","biermanagement");



if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


//$sql = "SELECT * FROM bestelformulier ORDER BY Aantal";


$sql = "SELECT * FROM `bestelformulier`";

if($_POST['afgerond'] == true) {
  $sql = $sql . "ORDER BY Status DESC";
}
 
if($_POST['onafgerond'] == true) {
  $sql= $sql . " ORDER BY Status ASC";
}

echo "
<table class='content-table'>
<thead>
  <tr>
    <th>ID</th>
    <th>Aantal</th>
    <th>Naam</th>
    <th>Adres</th>
    <th>E-mail</th>
    <th>Telefoonnummer</th>
    <th>Status</th>
    <th>Delete</th>
  </tr>
</thead>";


  if ($result = $mysqli->query($sql)) {
    foreach ($result as $row) {
    echo "

    <tr>
        <td>" . $row['id'] . "</td> 
        <td>" . $row['Aantal'] . "</td> 
        <td>" . $row['Voornaam']  .  ' ' . $row['Tussenvoegsel'] . ' ' . $row['Achternaam'] . "</td>
        <td> " . $row['Adres'] . ' ' . $row['Postcode'] . "</td>
        <td>". $row['E-mail'] . "</td>
        <td> " . $row['Telefoonnummer'] . "</td>";
        if($row['Status'] == 0){
            // niet afgehandeld. Toon deleteknop (linkje) en groen vinkje (linkje)
           echo "<td> <a class='afgerond' href='updatestatus.php?id=".$row['id']."'><i class='fas fa-check-circle'></i></a></td>";
        }else{
            // toon grijs vinkje (geen link)
           echo "<td> <i class='far fa-check-circle'></i></td>";
        }
        if($row['Status'] == 0){
          // niet afgehandeld. Toon deleteknop (linkje) en groen vinkje (linkje)
         echo "<td> <a class='afgerond' href='deleteorder.php?id=".$row['id']."'><i class='fas fa-trash-alt'></i></td>";
      }else{
          // delete knop weg.com.
         echo "";
      }
 
      
  }
  $result -> free_result();
}

$mysqli -> close();

$mysqli = new mysqli("localhost","root","","biermanagement");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


  

  


    
  
?>
<!DOCTYPE html>
<head>
  <title>overzicht begheerder</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
   <link rel="stylesheet" href="header.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body> 

</body>
</html>