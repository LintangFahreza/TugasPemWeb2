<!DOCTYPE html>
<html>

<head>
    <title>Diskusi4</title>
</head>

<body>
    <form method="post">
        Nilai Awal: <input type="number" name="nilai_awal" required><br><br>
        Nilai Akhir: <input type="number" name="nilai_akhir" required><br><br>
        <input type="submit" name="submit" value="Hitung" style="margin-left: 60px; margin-bottom: 10px;">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai_awal = $_POST['nilai_awal'];
        $nilai_akhir = $_POST['nilai_akhir'];
        $jumlah = 0;
        $total = 0;
        $deret = "";

        echo "Maka deret billangan yang tampil: ";

        for ($i = $nilai_awal; $i <= $nilai_akhir; $i++) {
            if ($i % 2 != 0 && $i % 3 == 0) {
                echo "$i, ";
                $deret .= "$i+";
                $jumlah++;

                $total += $i;
            }
        }

        $deret = rtrim($deret, "+");


        echo "<br>";
        echo "Jumlah Bilangan: $jumlah<br>";
        echo "Jumlah Nilai bilangan: $deret = $total";
    }
    ?>
</body>

</html>