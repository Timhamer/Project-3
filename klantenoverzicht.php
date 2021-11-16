<?php include "config.php"; ?>
<!DOCTYPE html>
<head>
  <title>Sorting Tables w/ JavaScript</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
   <link rel="stylesheet" href="header.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="overzicht.js">'
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
  <?php include "header.html"; ?>
  <center>
  <h2 class="klantenh2"> Klantenoverzicht </h2>
    <table class="content-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Wachtwoord</th>
            <th>Factuuradres</th>
            <th>Adres</th>
            <th>Postcode</th>
            <th>Tel</th>
            <th>E-mail</th>
            <th>rol</th>
          </tr>
        </thead>

          <?php
            $records = mysqli_query($con, "select * from users");

            while($data = mysqli_fetch_array($records)){
          ?>
            

        <tbody>
          <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['Naam'] ?></td>
            <td><?php echo $data['Wachtwoord'] ?></td>
            <td><?php echo $data['Factuuradres'] ?></td>
            <td><?php echo $data['Adres'] ?></td>
            <td><?php echo $data['Postcode'] ?></td>
            <td><?php echo $data['Tel'] ?></td>
            <td><?php echo $data['Email'] ?></td>
            <td><?php echo $data['Rol'] ?></td>
          </tr>
        </tbody>
        <?php
          }
        ?>
      </table>
    </center>
  <?php mysqli_close($con); ?>
</body>
</html>