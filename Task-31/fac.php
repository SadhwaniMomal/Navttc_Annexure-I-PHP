<?php
$fac = 0;
if (!empty($_GET['b'])) {
    $a = $_GET['b'];
    $fac = 1;
    for ($i = 1; $i <= $a; $i++) {
        $fac *= $i;
    }
}
?>

<html>
<head></head>
<body>
    <form method="GET">
        <input type="text" placeholder="Enter any number" name="b">
        <input type="submit" value="Result">
        <h3><?= $fac ?></h3>
    </form>
</body>
</html>
    