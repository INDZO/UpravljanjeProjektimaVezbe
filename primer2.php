<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator - Korak 2</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 40px auto; padding: 0 20px; }
        h2 { color: #333; }
        .korak { color: #888; margin-bottom: 20px; }
        .brojevi { background: #f5f5f5; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
        .brojevi p { margin: 5px 0; }
        .operacije { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
        .operacije button { padding: 12px; font-size: 16px; border: 2px solid #4CAF50; background: white; color: #333; cursor: pointer; border-radius: 5px; }
        .operacije button:hover { background: #4CAF50; color: white; }
        a { color: #888; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<?php
if (!isset($_GET['broj1']) || !isset($_GET['broj2']) || !is_numeric($_GET['broj1']) || !is_numeric($_GET['broj2'])) {
    header('Location: primer1.php?greska=' . urlencode('Molimo unesite validne brojeve.'));
    exit;
}

$broj1 = $_GET['broj1'];
$broj2 = $_GET['broj2'];
$broj3 = $_GET['broj3'];
?>

    <p class="korak">Korak 2 od 3</p>
    <h2>Izaberi operaciju</h2>

    <div class="brojevi">
        <p><strong>Prvi broj:</strong> <?php echo htmlspecialchars($broj1); ?></p>
        <p><strong>Drugi broj:</strong> <?php echo htmlspecialchars($broj2); ?></p>
    </div>
<p>Treci broj: <?php echo $broj3; ?></p>

    <form action="primer3.php" method="post">
        <input type="hidden" name="broj1" value="<?php echo htmlspecialchars($broj1); ?>">
        <input type="hidden" name="broj2" value="<?php echo htmlspecialchars($broj2); ?>">
    <input type="hidden" name="broj3" value="<?php echo $broj3; ?>">

        <div class="operacije">
            <button type="submit" name="operacija" value="sabiranje">+ Sabiranje</button>
            <button type="submit" name="operacija" value="oduzimanje">- Oduzimanje</button>
            <button type="submit" name="operacija" value="mnozenje">&times; Množenje</button>
            <button type="submit" name="operacija" value="deljenje">&divide; Deljenje</button>
        </div>
    </form>

    <p style="margin-top: 20px;"><a href="primer1.php">&larr; Nazad na unos</a></p>

</body>
</html>