<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aardrijkskunde</title>

    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet"">

</head>
<body>

<?php
$antwoord_1_controle = isset($_POST['antwoord_1_controle']);
$antwoord_1_1 = $antwoord_1_controle ? $_POST['antwoord_1_1'] : null;
$antwoord_1_2 = $antwoord_1_controle ? $_POST['antwoord_1_2'] : null;
$antwoord_1_3 = $antwoord_1_controle ? $_POST['antwoord_1_3'] : null;
$antwoord_1_4 = $antwoord_1_controle ? $_POST['antwoord_1_4'] : null;
$antwoord_1_5 = $antwoord_1_controle ? $_POST['antwoord_1_5'] : null;

$oplossing_1_goed_teller = 0;
$oplossing_1_1 = strtolower($antwoord_1_1) === 'moezel';
if ($oplossing_1_1) $oplossing_1_goed_teller++;
$oplossing_1_2 = strtolower($antwoord_1_2) === 'rijn';
if ($oplossing_1_2) $oplossing_1_goed_teller++;
$oplossing_1_3 = strtolower($antwoord_1_3) === 'waal';
if ($oplossing_1_3) $oplossing_1_goed_teller++;
$oplossing_1_4 = str_replace(' ', '',strtolower($antwoord_1_4)) === 'maaswaalkanaal';
if ($oplossing_1_4) $oplossing_1_goed_teller++;
$oplossing_1_5 = strtolower($antwoord_1_5) === 'maas';
if ($oplossing_1_5) $oplossing_1_goed_teller++;

$antwoord_commentaar = '';
if ($antwoord_1_controle) {
    $antwoord_commentaar = $oplossing_1_goed_teller . ' van de 5 goed.<br>';
    switch ($oplossing_1_goed_teller) {
        case 0:
        case 1:
        case 2:
            $antwoord_commentaar .= 'Dit is onvoldoende, nog een keer ...';
            break;
        case 3:
        case 4:
            $antwoord_commentaar .= 'OK, ga door naar de Natuurkunde opgave. <a href="/natuurkunde.php">Natuurkunde ... </a>';
            break;
        case 5:
            $antwoord_commentaar .= 'Alles goed! Ga door naar de Natuurkunde opgave. <a href="/natuurkunde.php">Natuurkunde ... </a>';
            break;
    }
}
?>


<h1>Aardrijkskunde</h1>

<form action="" method="post">
    <div class="route-stap">
        <h2>1</h2>
        <p>
            <label for="thionville-koblenz">Thionville naar Koblenz over de </label>
            <input type="text" id="thionville-koblenz" name="antwoord_1_1" value="<?php echo $antwoord_1_1 ?>">
        </p>
        <div>
            <img src="https://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Csize:mid%7CThionville, France%7CKoblenz, Germany&size=640x320&maptype=terrain&key=AIzaSyAeMA4zizPONXrCCqlgfQtdm1GF_a2Qrp4" alt="">
        </div>
        <!--
        <div>
            <p>
                <h3>Details</h3>
                <dl>
                    <dt>Afstand</dt>
                    <dd>210 KM</dd>
                    <dt>Stroomsnelheid</dt>
                    <dd>2,0 m/s</dd>
                </dl>
            </p>
        </div>
        -->
    </div>
    <div class="route-stap">
        <h2>2</h2>
        <p>
            <label for="koblenz-emmerich">Koblez naar Nederlandse grens over de </label>
            <input type="text" id="koblenz-emmerich" name="antwoord_1_2" value="<?php echo $antwoord_1_2 ?>">
        </p>
        <div>
            <img src="https://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Csize:mid%7CKoblenz, Germany%7CEmmerich, Germany&size=640x320&maptype=terrain&key=AIzaSyAeMA4zizPONXrCCqlgfQtdm1GF_a2Qrp4" alt="">
        </div>
        <!--
        <div>
            <p>
            <h3>Details</h3>
            <dl>
                <dt>Afstand</dt>
                <dd>755 KM</dd>
                <dt>Stroomsnelheid</dt>
                <dd>2,5 m/s</dd>
            </dl>
            </p>
        </div>
        -->
    </div>
    <div class="route-stap">
        <h2>3</h2>
        <p>
            <label for="emmerich-nijmegen">Nederlandse grens naar Nijmegen over de </label>
            <input type="text" id="emmerich-nijmegen" name="antwoord_1_3" value="<?php echo $antwoord_1_3 ?>">
        </p>
        <div>
            <img src="https://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Csize:mid%7CEmmerich, Germany%7CNijmegen, Netherlands&size=640x320&maptype=terrain&key=AIzaSyAeMA4zizPONXrCCqlgfQtdm1GF_a2Qrp4" alt="">
        </div>
        <!--
        <div>
            <p>
            <h3>Details</h3>
            <dl>
                <dt>Afstand</dt>
                <dd>21 KM</dd>
                <dt>Stroomsnelheid</dt>
                <dd>2,5 m/s</dd>
            </dl>
            </p>
        </div>
        -->
    </div>
    <div class="route-stap">
        <h2>4</h2>
        <p>
            <label for="nijmegen-mook">Nijmegen naar Mook via het </label>
            <input type="text" id="nijmegen-mook" name="antwoord_1_4" value="<?php echo $antwoord_1_4 ?>">
        </p>
        <div>
            <img src="https://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Csize:mid%7CNijmegen, Netherlands%7CMook, Netherlands&size=640x320&maptype=terrain&key=AIzaSyAeMA4zizPONXrCCqlgfQtdm1GF_a2Qrp4" alt="">
        </div>
        <!--
        <div>
            <p>
            <h3>Details</h3>
            <dl>
                <dt>Afstand</dt>
                <dd>14 KM</dd>
                <dt>Stroomsnelheid</dt>
                <dd>0 m/s</dd>
            </dl>
            </p>
        </div>
        -->
    </div>
    <div class="route-stap">
        <h2>5</h2>
        <p>
            <label for="mook-denbosch">Mook naar 's-Hertogenbosch over de </label>
            <input type="text" id="mook-denbosch" name="antwoord_1_5"  value="<?php echo $antwoord_1_5 ?>">
        </p>
        <div>
            <img src="https://maps.googleapis.com/maps/api/staticmap?markers=color:red%7Csize:mid%7CMook, Netherlands%7CDen Bosch, Netherlands&size=640x320&maptype=terrain&key=AIzaSyAeMA4zizPONXrCCqlgfQtdm1GF_a2Qrp4" alt="">
        </div>
        <!--
        <div>
            <p>
            <h3>Details</h3>
            <dl>
                <dt>Afstand</dt>
                <dd>58 KM</dd>
                <dt>Stroomsnelheid</dt>
                <dd>1 m/s</dd>
            </dl>
            </p>
        </div>
        -->
    </div>
    <p>
        <input type="submit" name="antwoord_1_controle" value="Controleer antwoorden">
    </p>
</form>

<p>
<div>
    <?php echo $antwoord_commentaar ?>
</div>
</p>


</body>
</html>
