<?php 
include "header.php";
include "config.php";

$ACCOUNTID = $_SESSION['id'];
    $mysqli = new mysqli("localhost","root","","biermanagement");
    
    if ( $mysqli->connect_error ) {
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        if (isset($_POST['Aantal'], $_POST['Adres'])) {

            if ($_POST['Aantal'] > 0) {

            $sql = "INSERT INTO `bestelformulier`(`Aantal`, `Adres`, `Userid`) VALUES (?,?,?)";

            $insert = $mysqli->prepare($sql);
            $insert->bind_param('isi', $_POST['Aantal'], $_POST['Adres'], $_SESSION['id']);
            
            
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
            }
        }
        }
    }
    $stmt = $mysqli->prepare('SELECT `Adres` FROM `bestelformulier` WHERE `Userid` = ?');
    $stmt->bind_param('i', $_SESSION['id']);
    $stmt->execute();
    $stmt = $stmt->get_result();
    $result = $stmt->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <form action="nieuweorder.php" method="post">
    <div class="nieuweorderborder">
        <div class="nieuweorderinhoud">
            <h2>Aantal biertjes</h2><input class="nieuweordergegevens" type="text"  placeholder="Aantal"  name="Aantal" required>
            <h2>Adres</h2><input class="nieuweordergegevens"  type="text"  placeholder="Adres"  name="Adres" required><br>
            <button name="submit" type="submit" class="nieuweorderbutton">Bestelling toevoegen</button>
            
        </div>
    </div>
    </form>
</body>
</html>