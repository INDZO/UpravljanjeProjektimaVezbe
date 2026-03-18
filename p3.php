<?php
$a = $_POST['a'] ?? 0;
$b = $_POST['b'] ?? 0;

$zbir = $a + $b;
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P3</title>
</head>
<body>

    <h2>P3</h2>

    <p>a = <?php echo htmlspecialchars($a); ?></p>
    <p>b = <?php echo htmlspecialchars($b); ?></p>
    <p>zbir = <?php echo $zbir; ?></p>

</body>
</html>