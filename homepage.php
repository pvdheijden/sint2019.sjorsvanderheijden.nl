<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sjors Sinterklaas 2019</title>

    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet"">
</head>

<body>

<?php
$antwoord_0_controle = isset($_POST['antwoord_0_controle']);
$antwoord_0 = $antwoord_0_controle ? $_POST['antwoord_0'] : null;

$antwoord_commentaar = '';
if ($antwoord_0 === 'vijf') {
    $antwoord_commentaar = 'Dat begint goed, zelfs het antwoord op deze vraag is <strong>fout</strong>! Opnieuw!';
} else if ($antwoord_0 === 'vijfeneenhalf') {
    $antwoord_commentaar = 'Dat had je <strong>gedacht</strong>! Denk opnieuw!';
} else if ($antwoord_0 === 'zes') {
    $antwoord_commentaar = 'Je wordt er niet echt warm van, maar inderdaad het <strong>minimale</strong> cijfer voor een voldoende is een zes.';
} else if ($antwoord_0 === 'zeven') {
    $antwoord_commentaar = ';-)';
}
?>

<h1>Sinterklaas 2019</h1>

<p>
    Sjors is stout! Hij doet niet zijn best op school! Hij let niet op in de les en maakt ook zijn huiswerk niet! <br>
    Zijn ouders zijn ten einde raad. Sinterklaas to the rescue!
</p>
<p>
    Geen kadootje voordat hij deze bijlessen met goed gevolg heeft afgerond. Dat wil zeggen voor alles een voldoende!
</p>

<h2>
    Vraag 0
</h2>
<p>
    Wat is de omschrijving en/of betekenis van het woord <strong>voldoende</strong>? Bij het behalen van een ...
</p>
<p>
    <form action="" method="post">
    <div>
        <input type="radio" id="antwoord_0_vijf" name="antwoord_0" value="vijf" <?php echo $antwoord_0 === 'vijf' ? 'checked' : '' ?> >
        <label for="antwoord_0_vijf">Een vijf (5)</label>
    </div>
    <div>
        <input type="radio" id="antwoord_0_vijfeneenhalf" name="antwoord_0" value="vijfeneenhalf" <?php echo $antwoord_0 === 'vijfeneenhalf' ? 'checked' : '' ?> >
        <label for="antwoord_0_vijfeneenhalf">Een vijf en een half (5,5)</label>
    </div>
    <div>
        <input type="radio" id="antwoord_0_zes" name="antwoord_0" value="zes" <?php echo $antwoord_0 === 'zes' ? 'checked' : '' ?> >
        <label for="antwoord_0_zes">Een zes (6)</label>
    </div>
    <div>
        <input type="radio" id="antwoord_0_zeven" name="antwoord_0" value="zeven" <?php echo $antwoord_0 === 'zeven' ? 'checked' : '' ?> >
        <label for="antwoord_0_zeven">Een zeven (7)</label>
    </div>

    <p>
        <input type="submit" name="antwoord_0_controle" value="Controleer antwoord">
    </p>
    </form>
</p>

<p>
    <div>
        <?php echo $antwoord_commentaar ?>
    </div>
</p>

<?php if($antwoord_0 === 'zes' || $antwoord_0 === 'zeven') { ?>
<h2>De bijlessen</h2>
<p>
    Twee franse jongens, Pierre en Alphonse, willen met hun boot van Thionville naar 's-Hertogenbosch om bij jou,
    Sjors, op bezoek te gaan. Zij weten helemaal niet hoe zij daar moeten komen en jij moet ze dit allemaal vertellen.
    Het bootje van de jongens, <em>Le Canard Sauvage</em> heeft een oude dieselmotor met een vermogen van 10 PK en een
    rendement van 50% bij een maximale snelheid van 10 KM/uur (bij stroomsnelheid van 0 m/s).

    Jij moet ze vertellen:
    <ul>
        <li>
            Hoe ze moeten varen, welke route ze moeten nemen, langs welke steden en over welke waterwegen. Hoeveel
            kilometer moeten zij in totaal afleggen?
            <a href="/aardrijkskunde.php">Aardrijkskunde ... </a>
        </li>
        <li>
            Hoe lang doen Pierre en Alphonse over de tocht? Zij moeten natuurlijk ook slapen, dus zij varen maximaal
            12 uur per dag.
            <a href="/natuurkunde.php">Natuurkunde ... </a>
        </li>
        <li>
            Hoeveel liter diesel hebben zij nodig?
            <a href="/scheikunde.php">Scheikunde ... </a>
        </li>
    </ul>

</p>
<p>
    ... oh ja, Pierre en Alphonse (zoals wel meer Fransen) spreken geen nederlands en geen engels, helaas!. <br>
    Je zult dus alle antwoorden in het frans of in het duits moeten geven :-)
</p>
<?php } ?>

</body>
</html>
