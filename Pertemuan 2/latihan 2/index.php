<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemweb2 | Pertemuan 2 | Latihan 2</title>
    <style>
        label {
            margin-right: 179px;
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1>Latihan 2</h1>
    <form action="" method="post">
        <label for="nilai1">Nilai I</label><label for="nilai2">Nilai II</label><br>
        <input type="number" name="nilai1" required>

        <select name="operasi" required>
            <option value="tambah">(+)</option>
            <option value="kurang">(-)</option>
            <option value="kali">(x)</option>
            <option value="bagi">(/)</option>
        </select>
        <input type="number" name="nilai2" required>

        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $operasi = $_POST['operasi'];

        if ($operasi == 'tambah') {
            $hasil = $nilai1 + $nilai2;
        } elseif ($operasi == 'kurang') {
            $hasil = $nilai1 - $nilai2;
        } elseif ($operasi == 'kali') {
            $hasil = $nilai1 * $nilai2;
        } elseif ($operasi == 'bagi') {
            $hasil = ($nilai2 != 0) ? $nilai1 / $nilai2 : "Error: Pembagian dengan nol tidak diperbolehkan.";
        } else {
            $hasil = "Operasi tidak valid.";
        }
        echo "<br><b>Hasil perhitungan:</b> $hasil";
    }
    ?>

</body>

</html>