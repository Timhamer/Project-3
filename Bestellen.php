<?php include "header.php"?>
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
    
    <form action="Bestel.php" method="post">
        
    <div class="bestelaantalborder">
        <div class="informatietekst">
            <h4>Bier de Boer</h4>
            <p>Speciaal bier special van Frans de boer.</p>
            <p>- 1 biertje = 2.50 euro</p>
            <p>- onder de 25 euro geldt een verzendtarief van 7,50 euro.</p>
            <p>- Vanaf 25 euro is het eenmalig 5 euro.</p>
            <p>- Max 24 biertjes</p>
        </div>
    <center>      
            <div class="bestelaantalrow">
                <div class="bestelaantaltekst"><h2>Aantal</h2></div>

                <div class="">Totaal = </div>
            </div>
            <div class="bestelaantalrow">
                <div class="bestelaantalinvul"><input class="bestelaantal" type="number"  placeholder="Aantal"  name="Aantal" required></div>
            </div>  
            </div> 
    <div class="bestelborder">
        <div class="bestelformulierpadding">

            <div class="bestelrow">
                <div class="bestelcolumntekst"><h2>Voornaam</h2></div>
                <div class="bestelcolumntekst"><h2>E-mail</h2></div>
            </div>
            <div class="bestelrow">
                <div class="bestelcolumninvul"><input class="bestelgegevens" type="text"  placeholder="Voornaam"  name="Voornaam" required></div>
                <div class="bestelcolumninvul"><input class="bestelgegevens" type="email"  placeholder="E-mail"  name="E-mail" required></div>
            </div>
            <div class="bestelrow">
                <div class="bestelcolumntekst"><h2>Tussenvoegsel</h2></div>
                <div class="bestelcolumntekst"><h2>Adres</h2></div>
            </div>
            <div class="bestelrow">
                <div class="bestelcolumninvul"><input class="bestelgegevens" type="text"  placeholder="Tussenvoegsel"  name="Tussenvoegsel" ></div>
                <div class="bestelcolumninvul"><input class="bestelgegevens" type="text"  placeholder="Adres"  name="Adres" required></div>
            </div>
            <div class="bestelrow">
                <div class="bestelcolumntekst"><h2>Achternaam</h2></div>
                <div class="bestelcolumntekst"><h2>Postcode</h2></div>
            </div>
            <div class="bestelrow">
                <div class="bestelcolumninvul"><input class="bestelgegevens" type="text"  placeholder="Achternaam"  name="Achternaam" required></div>
                <div class="bestelcolumninvul"><input class="bestelgegevens" type="text"  placeholder="Postcode"  name="Postcode" required></div>
            </div>
            <div class="bestelrow">
                <div class="bestelcolumntekst"><h2>Telefoonnummer</h2></div>
                
            </div>
            <div class="bestelrow">
                <div class="bestelcolumntekst"><h2>Bestellen</h2></div>
                <div class="bestelcolumninvul"><input class="bestelgegevens" type="tel" placeholder="Telefoonnummer"  name="Telefoonnummer" required></div>
                <button name="submit" type="submit" class="bestelbtn">Bestellen</button>
            </div>
        </div>
    </div>
        </form>
    </center>

</head>

</body>
</html>
