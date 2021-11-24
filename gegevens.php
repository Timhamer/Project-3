<?php 
 include "config.php";
 include "header.php";
 $_ACCOUNTID = $_SESSION['id'];

$sql = mysqli_query($con, "select * from users where id='$_ACCOUNTID'");
$row = mysqli_fetch_array($sql)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="script/functions.js"></script>
    <link rel="stylesheet" href="header.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Gegevens</title>
</head>
<body>
    <div class="gegevens">
        <h2 class="titelgegevens">Gebruikers gegevens</h2>
        <h2 class="gegevensnaam">Naam:</h2>
        <h2 class="data" contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="><?php echo $row['Naam'];?> "onBlur="saveInlineEdit(this,'Naam', '<?php echo $row['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $row['Naam']; ?></h2>
        <h2 class="gegevensnaam">Wachtwoord:</h2>
        <h2 class="data"contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="><?php echo $row['Wachtwoord'];?> "onBlur="saveInlineEdit(this,'Naam', '<?php echo $row['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $row['Wachtwoord']; ?></h2>
        <h2 class="gegevensnaam">Factuuradres:</h2>
        <h2 class="data" contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="><?php echo $row['Factuuradres'];?> "onBlur="saveInlineEdit(this,'Naam', '<?php echo $row['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $row['Factuuradres']; ?></h2>
        <h2 class="gegevensnaam">Adres:</h2>
        <h2 class="data" contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="><?php echo $row['Adres'];?> "onBlur="saveInlineEdit(this,'Naam', '<?php echo $row['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $row['Adres']; ?></h2>
        <h2 class="gegevensnaam">Postcode:</h2>
        <h2 class="data" contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="><?php echo $row['Postcode'];?> "onBlur="saveInlineEdit(this,'Naam', '<?php echo $row['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $row['Postcode']; ?></h2>
        <h2 class="gegevensnaam">Telefoonnummer:</h2>
        <h2 class="data" contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="><?php echo $row['Tel'];?> "onBlur="saveInlineEdit(this,'Naam', '<?php echo $row['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $row['Tel']; ?></h2>
        <h2 class="gegevensnaam">E-mail:</h2>
        <h2 class="data" contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="><?php echo $row['Email'];?> "onBlur="saveInlineEdit(this,'Naam', '<?php echo $row['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $row['Email']; ?></h2>
    </div>
</body>