<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Natuurkunde</title>

    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet"">

</head>
<body>

<?php
$antwoord_2_controle = isset($_POST['antwoord_2_controle']);
$antwoord_2 = $antwoord_2_controle ? $_POST['antwoord_2'] : null;
?>

<h1>Natuurkunde</h1>

<form action="" method="post">
    <h2>Hoe lang duurt de reis?</h2>
    <p>
        <img class="left" src="http://www.eventides.org.uk/images/Wild%20Duck%20Beautje.jpg" alt="">
        <div>
            <table>
            <thead>
            <tr>
                <th></th>
                <th>Afstand (Km)</th>
                <th>Stroom snelheid (m/s)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Moezel</td>
                <td>210</td>
                <td>2,0</td>
            </tr>
            <tr>
                <td>Rijn</td>
                <td>755</td>
                <td>2,5</td>
            </tr>
            <tr>
                <td>Waal</td>
                <td>21</td>
                <td>2,5</td>
            </tr>
            <tr>
                <td>Maaswaal kanaal</td>
                <td>14</td>
                <td>0</td>
            </tr>
            <tr>
                <td>Maas</td>
                <td>58</td>
                <td>1</td>
            </tr>
            </tbody>
        </table>
        </div>
    </p>
    <p>
        Pierre en Alphonse vertrekken maandag ochtend om 9:00 uur vanuit Thionville richting 's-Hertogenbosch. <br>
        Wanneer komen zij dan in 's-Hertogenbosch aan?
    </p>
    <div>
        <input type="radio" id="antwoord_2_" name="antwoord_2" value="A" <?php echo $antwoord_2 === 'A' ? 'checked' : '' ?> >
        <label for="antwoord_2_">Donderdag iets voor 8 uur 's avonds</label>
    </div>
    <div>
        <input type="radio" id="antwoord_2_" name="antwoord_2" value="B" <?php echo $antwoord_2 === 'B' ? 'checked' : '' ?> >
        <label for="antwoord_2_">Woensdag iets voor 8 uur 's avonds</label>
    </div>
    <div>
        <input type="radio" id="antwoord_2_" name="antwoord_2" value="C" <?php echo $antwoord_2 === 'C' ? 'checked' : '' ?> >
        <label for="antwoord_2_">Vrijdag iets voor 8 uur 's avonds</label>
    </div>
    <div>
        <input type="radio" id="antwoord_2_" name="antwoord_2" value="D" <?php echo $antwoord_2 === 'D' ? 'checked' : '' ?> >
        <label for="antwoord_2_">Geen van de bovenstaande antwoorden</label>
    </div>
    <p>
        <input type="submit" name="antwoord_2_controle" value="Controleer antwoord">
    </p>
    <?php if($antwoord_2_controle && $antwoord_2 === 'C') { ?>
    <p>
        Helemaal goed!. Nu vlug naar de friettent voor frikandellen, want die fransen barsten van de honger! <a href="/scheikunde.php">Scheikunde ... </a>
    </p>
    <div>
        <ul>
            <li>
                <ol>
                    <li>
                        Moezel
                        <ul>
                            <li>Afstand = 210 Km m</li>
                            <li>Snelheid = Boot: 10 Km/uur + Stroomsnelheid: 2,0 m/s --> 7,2 Km/uur= 17,2 Km/uur</li>
                            <li>Tijd = 210 / 17,2 = 12,21 uur</li>
                        </ul>
                    </li>
                    <li>
                        Rijn
                        <ul>
                            <li>Afstand = 755 Km </li>
                            <li>Snelheid = Boot: 10 Km/uur + Stroomsnelheid: 2,5 m/s --> 9,0 Km/uur = 19 Km/uur</li>
                            <li>Tijd = 755 / 19,0 = 39,74 uur</li>
                        </ul>
                    </li>
                    <li>
                        Waal
                        <ul>
                            <li>Afstand = 21 Km </li>
                            <li>Snelheid = Boot: 10 Km/uur + Stroomsnelheid: 2,5 m/s --> 9,0 Km/uur = 19 Km/uur</li>
                            <li>Tijd = 21 / 19,0 = 1,11 uur</li>
                        </ul>
                    </li>
                    <li>
                        Maaswaal kanaal
                        <ul>
                            <li>Afstand = 14 Km </li>
                            <li>Snelheid = Boot: 10 Km/uur + Stroomsnelheid: 0,0 m/s --> 0,0 Km/uur = 10 Km/uur</li>
                            <li>Tijd = 14 / 10,0 = 1,40 uur</li>
                        </ul>
                    </li>
                    <li>
                        Maas
                        <ul>
                            <li>Afstand = 58 Km </li>
                            <li>Snelheid = Boot: 10 Km/uur + Stroomsnelheid: 1,0 m/s --> 3,6 Km/uur = 13,6 Km/uur</li>
                            <li>Tijd = 58 / 13,6 = 4,26 uur</li>
                        </ul>
                    </li>
                </ol>
            </li>
            <li>
                Totale reistijd = 58,72 uur + 58,72 modulo 12 --> 4 keer 12 uur rusttijd = 106,72 uur --> 4,44 dagen
            </li>
            <li>
                Aankomst = vrijdag iets voor 8 uur 's avonds!
            </li>
        </ul>
    </div>
    <?php } else if ($antwoord_2_controle) { ?>
    <p>
        Helaas :-( niet goed. <a href="/scheikunde.php">Scheikunde ... </a>
    </p>
    <?php } ?>
</form>

</body>
</html>

