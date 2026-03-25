<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator - Korak 1</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 500px; margin: 40px auto; padding: 0 20px; }
        h2 { color: #333; }
        .korak { color: #888; margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="number"] { width: 100%; padding: 8px; margin-bottom: 15px; box-sizing: border-box; }
        input[type="submit"] { background: #4CAF50; color: white; border: none; padding: 10px 30px; cursor: pointer; font-size: 16px; }
        input[type="submit"]:hover { background: #45a049; }
        .greska { color: red; margin-bottom: 15px; }
    </style>
</head>
<body>
    <p class="korak">Korak 1 od 3</p>
    <h2>Unesi dva broja</h2>

    <?php if (isset($_GET['greska'])): ?>
        <p class="greska"><?php echo htmlspecialchars($_GET['greska']); ?></p>
    <?php endif; ?>

    <form action="primer2.php" method="get">
        <label for="broj1">Prvi broj:</label>
        <input type="number" step="any" id="broj1" name="broj1" required>

        <label for="broj2">Drugi broj:</label>
        <input type="number" step="any" id="broj2" name="broj2" required>

        <input type="submit" value="Dalje &rarr;">
    </form>
</body>
</html>