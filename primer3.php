<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$broj1 = $_POST['broj1'];
$broj2 = $_POST['broj2'];
$operacija = $_POST['operacija'];

$rezultat = 0;

switch($operacija) {
    case "sabiranje":
        $rezultat = $broj1 + $broj2;
        break;
    case "oduzimanje":
        $rezultat = $broj1 - $broj2;
        if ($rezultat < 0) {
            echo "Rezultat je negativan!";
        }
        break;
    case "mnozenje":
        $rezultat = $broj1 * $broj2;
        break;
    case "deljenje":
        if ($broj2 != 0) {
            $rezultat = $broj1 / $broj2;
        } else {
            echo "Greška: deljenje sa nulom!";
            exit;
        }
        break;
}
?>

<h2>Rezultat</h2>

<p>Prvi broj: <?php echo $broj1; ?></p>
<p>Drugi broj: <?php echo $broj2; ?></p>
<p>Operacija: <?php echo $operacija; ?></p>
<p>Rezultat: <?php echo $rezultat; ?></p>

</body>
</html>