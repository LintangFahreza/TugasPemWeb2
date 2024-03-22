<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 6</title>
</head>

<body>
    <h2>Luas Segitiga Cara 2</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php for ($i = 0; $i < 5; $i++) { ?>
            <label for="alas<?php echo $i; ?>">Alas Segitiga <?php echo ($i + 1); ?>:</label>
            <input type="number" name="alas[]" id="alas<?php echo $i; ?>" required><br>
            <label for="tinggi<?php echo $i; ?>">Tinggi Segitiga <?php echo ($i + 1); ?>:</label>
            <input type="number" name="tinggi[]" id="tinggi<?php echo $i; ?>" required><br><br>
        <?php } ?>
        <input type="submit" value="Hitung">
    </form>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $alas_array = $_POST['alas'];
        $tinggi_array = $_POST['tinggi'];

        echo "<table border='1'>";
        echo "<tr><th>Segitiga ke-</th><th>Alas</th><th>Tinggi</th><th>Luas</th></tr>";
        for ($i = 0; $i < count($alas_array); $i++) {
            $luas = 0.5 * $alas_array[$i] * $tinggi_array[$i];
            echo "<tr>";
            echo "<td>" . ($i + 1) . "</td>";
            echo "<td>" . $alas_array[$i] . "</td>";
            echo "<td>" . $tinggi_array[$i] . "</td>";
            echo "<td>" . $luas . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>