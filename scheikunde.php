<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Scheikunde</title>

    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet"">

</head>
<body>

<?php
$antwoord_3_controle = isset($_POST['antwoord_3_controle']);
$antwoord_3 = $antwoord_3_controle ? $_POST['antwoord_3'] : null;
?>

<h1>Scheikunde</h1>

<form action="" method="post">
    <h2>Hoeveel brandstof is er nodig?</h2>
    <div>
    <img class="left" src="https://5.imimg.com/data5/MR/LX/MY-6171374/light-fuel-oil-500x500.jpg" alt="">
    <div>
        <p>
            Diesel is een mengsel van vele moleculen. Het bevat alkanen C <sub>n</sub>H<sub>2N+2</sub>, cycloalkanen
            C<sub>n</sub>H<sub>2n</sub> en aromaten C<sub>n</sub>H<sub>2n-6</sub>. <br>
            Gemiddeld geeft dat iets van ongeveer C<sub>n</sub>H <sub>1,95</sub>. Je kunt stellen dat n varieert van
            12 tot 20, zeg gemiddeld 16. <br>
            Dus "gemiddeld" is diesel (uit aardolie) ongeveer C<sub>16</sub>H<sub>31</sub> <br>
            <br>

            Voor deze bijles kun je ervan uit gaan dat de motor van de boot perfect loopt en dat er volledige verbranding is volgens:
            C<sub>16</sub>H<sub>31</sub> + 23,75 O<sub>2</sub> --> 16 CO<sub>2</sub> + 15,5 H<sub>2</sub>O
        </p>
    </div>
    <div>
        <h4>Hints</h4>
        <p>
            - 1 PK = 0,735 kW (= 0,735 kJ/s) <br>
            - Chemische binding energie van C-H = 413 kJ/mol <br>
            - Chemische binding energie van C-C = 346 kJ/mol <br>
            - Chemische binding energie van O=O = 498 kJ/mol <br>
            - Chemische binding energie van O-H = 463 kJ/mol <br>
            - Chemische binding energie van C=O = 799 kJ/mol <br>
            - Soortelijk gewicht van diesel = 0,84
        </p>
    </div>
    </div>
    <p>
        Hoeveel liter diesel hebben Piere en Alphonse nodig om naar 's-Hertogenbosch te kunnen varen?
    </p>
    <div>
        <input type="radio" " name="antwoord_3" value="A" <?php echo $antwoord_3 === 'A' ? 'checked' : '' ?> >
        <label>Ongeveer 82 liter diesel</label>
    </div>
    <div>
        <input type="radio" name="antwoord_3" value="B" <?php echo $antwoord_3 === 'B' ? 'checked' : '' ?> >
        <label>Ongeveer 41 liter diesel</label>
    </div>
    <div>
        <input type="radio" name="antwoord_3" value="C" <?php echo $antwoord_3 === 'C' ? 'checked' : '' ?> >
        <label>Iets minder dan 116 liter diesel</label>
    </div>
    <div>
        <input type="radio" name="antwoord_3" value="D" <?php echo $antwoord_3 === 'D' ? 'checked' : '' ?> >
        <label>Geen van de bovenstaande antwoorden</label>
    </div>
    <p>
        <input type="submit" name="antwoord_3_controle" value="Controleer antwoord">
    </p>

    <?php if($antwoord_3_controle && $antwoord_3 === 'A') { ?>
    <p>
        Helemaal goed!. <a href="/resultaat.php">Resultaat ... </a>
    </p>
    <div>
        <ul>
            <li>
                Motor vermogen = 10 PK --> 7,35 kW --> 7,35 kJ/s <br>
                Tijd dat motor "arbeid heeft verricht" = 12,21 + 39,74 + 1,11 + 1,40 + 4,26 = 58,72 uur --> 211.392 s.
                <br>
                Totale energie door motor geproduceert= 7,35 * 211392 = 1.553.731 kJ <br>
                Motor heeft efficientie van 50% bij constante snelheid (van 10 km/uur), dus energie
                gebruikt voor "beweging" =  1.553.731 / 0,5 = 3.107.462 kJ.
            </li>
            <li>
                Energie van de (volledige) verbranding van 1 mol diesel c.q. C<sub>16</sub>H<sub>31</sub> = <br>
                - 31 * -413 = -12.803 kJ om C-H bindingen te verbreken <br>
                - 15 * -346 = -5.190 kJ om C-H bindingen te verbreken <br>
                - 23,75 * -498 = -11.828 kJ om O=O bindingen te verbreken <br>
                - 16 * 2 * 799 = 25.568 kJ bij vorming van C=O bindingen <br>
                - 15,5 * 2 * 463 = 14.353 bij vorming van O-H bindingen <br>
                Resultaat = 10.100 kJ / mol
            </li>
            <li>
                - Benodigde hoeveelheid diesel = 3.107.462 / 9.538 = 307,7 mol <br>
                - Massa van 1 mol diesel c.q. C<sub>16</sub>H<sub>31</sub> = 16 * 12,01 + 31 * 1 = 223,2 gram <br>
                - Totale verbruikte diesel = 307,7 * 223,2 / 0,84 = 81760 ml =  81,76 liter
            </li>
        </ul>
    </div>
    <?php } else if ($antwoord_3_controle) { ?>
        <p>
            Helaas :-( niet goed. <a href="/resultaat.php">Resultaat ... </a>
        </p>
    <?php } ?>

</form>

</body>
</html>


