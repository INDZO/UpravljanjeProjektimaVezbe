<?php
$a = $_GET['a'] ?? '';
$b = $_GET['b'] ?? '';
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P2</title>
</head>
<body>

    <h2>P2</h2>

    <p>a = <?php echo htmlspecialchars($a); ?></p>
    <p>b = <?php echo htmlspecialchars($b); ?></p>

    <form action="p3.php" method="post">
        <input type="hidden" name="a" value="<?php echo htmlspecialchars($a); ?>">
        <input type="hidden" name="b" value="<?php echo htmlspecialchars($b); ?>">

        <button type="submit">Pošalji na P3</button>
    </form>

</body>
</html>