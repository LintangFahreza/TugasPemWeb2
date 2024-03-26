<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 7</title>
</head>

<body>
    <h1>Diskusi Program Menggunakan Function</h1>
    <h3>[1] Penggunan IF</h3>
    <h3>[2] Pengunaan SWITCH CASE</h3>
    <h3>[3] Penggunan Looping</h3>
    <h3>[4] Penggunan Array</h3>
    <form action="" method="post">
        <label for="">Pilih Materi yang ingin anda pelajari :</label>
        <input type="number" name="pilihan">
        <button name="submit">Kirim</button>
    </form>
    <hr style="width: 100%; color: red; background-color: blue; height: 5px; ">
    <?php
    function pengunaanif()
    {
    ?>
        <h1>Pengunaan IF</h1>
        <form action="outputif.php" method="post" autocomplete="off">
            <label for="nama">Nama</label>: <input type="text" name="nama" id="nama" required style="margin-bottom: 10px;"><br>
            <label for="jurusan">Jurusan</label>: <input type="text" name="jurusan" id="jurusan" required style="margin-bottom: 10px;"><br>
            <label for="nilaitgs">Nilai Tugas</label>: <input type="number" name="nilaitgs" id="nilaitgs" required style="margin-bottom: 10px;"><br>
            <label for="nilaiuts">Nilai UTS</label>: <input type="number" name="nilaiuts" id="nilaiuts" required style="margin-bottom: 10px;"><br>
            <label for="nilaiuas">Nilai UAS</label>: <input type="number" name="nilaiuas" id="nilaiuas" required style="margin-bottom: 10px;"><br>
            <input class="submit" type="submit" value="Hitung">
        </form>
    <?php
    }

    function pengunaanswitchcase()
    {
    ?>
        <h1>Pengunaan Switch Case Kalkulator</h1>
        <form action="" method="post">
            <label for="nilai1">Nilai I</label><label for="nilai2" style="margin-left: 180px;">Nilai II</label><br>
            <input type="number" name="nilai1" required>

            <select name="operasi" required>
                <option value="tambah">(+)</option>
                <option value="kurang">(-)</option>
                <option value="kali">(x)</option>
                <option value="bagi">(/)</option>
            </select>
            <input type="number" name="nilai2" required>
            <button name="hitung">Hitung</button>
        </form>
    <?php
    }
    function pengunaanlooping()
    {
    ?>
        <h2>Penggunaan Lopping Deret</h2>
        <form method="post">
            Nilai Awal: <input type="number" name="nilai_awal" required><br><br>
            Nilai Akhir: <input type="number" name="nilai_akhir" required><br><br>
            <input type="submit" name="hitungderet" value="Hitung" style="margin-left: 60px; margin-bottom: 10px;">
        </form>
    <?php
    }
    function pengunaanarray()
    {

        $data = array(
            array('alas' => 5, 'tinggi' => 4),
            array('alas' => 7, 'tinggi' => 3),
            array('alas' => 10, 'tinggi' => 6),
            array('alas' => 8, 'tinggi' => 5),
            array('alas' => 6, 'tinggi' => 9)
        );

        echo "<h2>Pengunaan Array Langsung </h2>\n";
        echo "<table border='1'>";
        echo "<tr><th>Segitiga ke-</th><th>Alas</th><th>Tinggi</th><th>Luas</th></tr>";
        foreach ($data as $key => $triangle) {
            $luas = 0.5 * $triangle['alas'] * $triangle['tinggi'];
            echo "<tr>";
            echo "<td>" . ($key + 1) . "</td>";
            echo "<td>" . $triangle['alas'] . "</td>";
            echo "<td>" . $triangle['tinggi'] . "</td>";
            echo "<td>" . $luas . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }


    if (isset($_POST["submit"])) {
        $pilihfunction = $_POST['pilihan'];
        switch ($pilihfunction) {
            case 1:
                pengunaanif();
                break;
            case 2:
                pengunaanswitchcase();
                break;
            case 3:
                pengunaanlooping();
                break;
            case 4:
                pengunaanarray();
                break;
            default:
                echo 'Pilihan tidak ada';
                break;
        }
    }
    //buatkalkulator
    if (isset($_POST['hitung'])) {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $operasi = $_POST['operasi'];

        switch ($operasi) {
            case 'tambah':
                $hasil = $nilai1 + $nilai2;
                break;
            case 'kurang':
                $hasil = $nilai1 - $nilai2;
                break;
            case 'kali':
                $hasil = $nilai1 * $nilai2;
                break;
            case 'bagi':
                $hasil = ($nilai2 != 0) ? $nilai1 / $nilai2 : "Error: Pembagian dengan nol tidak diperbolehkan.";
                break;
            default:
                $hasil = "Operasi tidak valid.";
                break;
        }
    ?>
        <h2>Pengunaan Switch Case Kalkulator</h2>
    <?php
        echo "<br><b>Hasil perhitungan:</b> $hasil";
    }

    //buatderet
    if (isset($_POST['hitungderet'])) {
        $nilai_awal = $_POST['nilai_awal'];
        $nilai_akhir = $_POST['nilai_akhir'];
        $jumlah = 0;
        $total = 0;
        $deret = "";
    ?>
        <h2>Penggunaan Lopping Deret</h2>
        <h3>Hasil</h3>
    <?php
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