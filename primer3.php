<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator - Rezultat</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 40px auto; padding: 0 20px; }
        h2 { color: #333; }
        .korak { color: #888; margin-bottom: 20px; }
        .kartica { background: #f5f5f5; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .kartica p { margin: 8px 0; }
        .rezultat { font-size: 24px; color: #4CAF50; font-weight: bold; margin-top: 15px; padding-top: 15px; border-top: 2px solid #ddd; }
        .greska { color: red; font-size: 18px; font-weight: bold; }
        a { color: #4CAF50; text-decoration: none; display: inline-block; margin-top: 10px; margin-right: 20px; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<?php
if (!isset($_POST['broj1']) || !isset($_POST['broj2']) || !isset($_POST['operacija'])
    || !is_numeric($_POST['broj1']) || !is_numeric($_POST['broj2'])) {
    header('Location: primer1.php?greska=' . urlencode('Neispravan pristup. Počnite od početka.'));
    exit;
}

$broj1 = $_POST['broj1'];
$broj2 = $_POST['broj2'];
$broj3 = $_POST['broj3'];
$operacija = $_POST['operacija'];

$dozvoljeneOperacije = ['sabiranje', 'oduzimanje', 'mnozenje', 'deljenje'];
if (!in_array($operacija, $dozvoljeneOperacije)) {
    header('Location: primer1.php?greska=' . urlencode('Nepoznata operacija.'));
    exit;
}

$simboli = [
    'sabiranje' => '+',
    'oduzimanje' => '-',
    'mnozenje' => '×',
    'deljenje' => '÷',
];

$greska = '';
$rezultat = 0;

switch($operacija) {
    case "sabiranje":
        $rezultat = $broj1 + $broj2 + $broj3;
        break;
    case "oduzimanje":
        $rezultat = $broj1 - $broj2 - $broj3;
        if ($rezultat < 0) {
            echo "Rezultat je negativan!";
        }
        break;
    case "mnozenje":
        $rezultat = $broj1 * $broj2 * $broj3;
        break;
    case "deljenje":
        if ($broj2 != 0 && $broj3 != 0) {
            $rezultat = $broj1 / $broj2 / $broj3;
        } else {
            $greska = 'Greška: nije dozvoljeno deljenje sa nulom.';
        }
        break;
}
?>

    <p class="korak">Korak 3 od 3</p>
    <h2>Rezultat</h2>

    <div class="kartica">
        <p><strong>Prvi broj:</strong> <?php echo htmlspecialchars($broj1); ?></p>
        <p><strong>Drugi broj:</strong> <?php echo htmlspecialchars($broj2); ?></p>
        <p><strong>Treći broj:</strong> <?php echo htmlspecialchars($broj3); ?></p>
        <p><strong>Operacija:</strong> <?php echo $simboli[$operacija] . ' ' . htmlspecialchars($operacija); ?></p>

        <?php if ($greska): ?>
            <p class="greska"><?php echo $greska; ?></p>
        <?php else: ?>
            <p class="rezultat"><?php echo htmlspecialchars($broj1) . ' ' . $simboli[$operacija] . ' ' . htmlspecialchars($broj2) . ' = ' . $rezultat; ?></p>
        <?php endif; ?>
    </div>

    <a href="primer1.php">&larr; Novi račun</a>

</body>
</html>