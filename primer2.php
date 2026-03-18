<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$broj1 = $_GET['broj1'];
$broj2 = $_GET['broj2'];
?>

<h2>Izaberi operaciju</h2>

<p>Prvi broj: <?php echo $broj1; ?></p>
<p>Drugi broj: <?php echo $broj2; ?></p>

<form action="primer3.php" method="post">
    <input type="hidden" name="broj1" value="<?php echo $broj1; ?>">
    <input type="hidden" name="broj2" value="<?php echo $broj2; ?>">

    <button type="submit" name="operacija" value="sabiranje">Sabiranje</button>
    <button type="submit" name="operacija" value="oduzimanje">Oduzimanje</button>
    <button type="submit" name="operacija" value="mnozenje">Množenje</button>
    <button type="submit" name="operacija" value="deljenje">Deljenje</button>
</form>

</body>
</html>