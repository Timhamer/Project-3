<?php if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="header.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
<div class="header" id="header">
  <label for="check" class="checkbtn" onclick="myFunction()"><i class="fas fa-bars" id="check"></i></label>
  <div class="innerheader">
    <div class="logo_container">
      <h1>Bier<span>deBoer</span></h1> 
    </div>
      <div class="navbar">
        <ul>
          <a href="klantenoverzicht.php"><li>Klanten overzicht</li></a>
          <a href="overzicht.php"><li>overzicht</li></a>
          <a><li> <form method='post' action="">
            <input class="logoutbtn" type="submit" value="Log uit" name="but_logout">
        </form></li></a>
        </ul>
      <script>
          function myFunction() {
            var x = document.getElementById("header");
            if (x.className === "header") {
              x.className += " responsive";
            } else {
              x.className = "header";
            }
          }
      </script>
      </div>
  </div>
</div>    
   
</body>

</html>