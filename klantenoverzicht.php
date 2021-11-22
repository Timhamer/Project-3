<?php include "config.php"; 
if(!isset($_SESSION['id'])){
  header('Location: index.php');
}

?>



<!DOCTYPE html>
<head>
  <title>Sorting Tables w/ JavaScript</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
   <link rel="stylesheet" href="header.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
   <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
   <script type="text/javascript" src="script/functions.js"></script>
   <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/> 
</head>

<body>
  <?php include "header.html"; 
    if(isset($_REQUEST['submit'])){
      $sql = "DELETE FROM users WHERE id = {$_REQUEST['id']}";
      if(mysqli_query($con, $sql)){
        $success_message = "Account Verwijderd.";
      }else {
        $error_message = "Account verwijderen mislukt";
      }
    }
  ?>
  <center>
  <h2 class="klantenh2"> Klantenoverzicht </h2>
  <div>
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
            <th>Actie</th>
          </tr>
        </thead>

          <?php
            $records = mysqli_query($con, "select * from users");

            while($data = mysqli_fetch_array($records)){
          ?>
            
            
        <tbody>
          <tr>
            <td><?php echo $data['id']; ?></td>
            <td contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="<?php echo $data['Naam']; ?>"onBlur="saveInlineEdit(this,'Naam', '<?php echo $data['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $data['Naam']; ?></td>
            <td contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="<?php echo $data['Wachtwoord']; ?>"onBlur="saveInlineEdit(this,'Wachtwoord', '<?php echo $data['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $data['Wachtwoord']; ?></td>
            <td contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="<?php echo $data['Factuuradres']; ?>"onBlur="saveInlineEdit(this,'Factuuradres', '<?php echo $data['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $data['Factuuradres']; ?></td>
            <td contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="<?php echo $data['Adres']; ?>"onBlur="saveInlineEdit(this,'Adres', '<?php echo $data['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $data['Adres']; ?></td>
            <td contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="<?php echo $data['Postcode']; ?>"onBlur="saveInlineEdit(this,'Postcode', '<?php echo $data['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $data['Postcode']; ?></td>
            <td contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="<?php echo $data['Tel']; ?>"onBlur="saveInlineEdit(this,'Tel', '<?php echo $data['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $data['Tel']; ?></td>
            <td contenteditable="true" onkeydown="return (event.keyCode!=13);" data-old_value="<?php echo $data['Email']; ?>"onBlur="saveInlineEdit(this,'Email', '<?php echo $data['id']; ?> ')" onClick="highlightEdit(this);"><?php echo $data['Email']; ?></td>
            <td><?php echo '<form action="" method="POST"><input type="hidden" name="id" value=' . $data['id'] . '><input type="submit"
            class="btn-delete" name="submit" value="Verwijderen"></form> <a class="btnmodal" href="#'.$data['id'].'">Weergeven</a> '?> </td>
          </tr>
        </tbody>

        <?php 
        echo '<div id="'.$data['id'].'" class="overlay">
                <div class="popup">
                  <h2>Test</h2>
                  <a class="closemodal" href="#">&times;</a>
                  <div class="content">
                  '.$data['id'].'
                  </div>
                </div>
              </div>

                      
        '?>
              
        <?php
          }
        ?>
      </table>

      <div class="modal">
              <div class="modal-content">
                <span class="close-button">&times;</span>
                <h1>test</h1>
              </div>
            </div>


      <h2><a href="klantentoevoegen.php">Klanten toevoegen</a></h2>
        </div>
    </center>
  <?php mysqli_close($con); ?>
  <!-- <script>
    const modal = document.querySelector(".modal");
    const trigger = document.querySelector(".trigger");
    const closeButton = document.querySelector(".close-button");

function toggleModal() {
    modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
    if (event.target === modal) {
        toggleModal();
    }
}

trigger.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener( "click", windowOnClick);
</script> -->
</body>
</html>
