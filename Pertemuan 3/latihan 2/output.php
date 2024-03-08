<?php
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $matkul = $_POST['matkul'];
    $jumlahkhdrn = $_POST['jumlahkhdrn'];
    $nilaitgs = $_POST['nilaitgs'];
    $nilaiuts = $_POST['nilaiuts'];
    $nilaiuas = $_POST['nilaiuas'];
    $nilaikhdrn = $jumlahkhdrn / 18 * 100;
    $nilaiakhir = ($jumlahkhdrn / 18 * 0.1) + ($nilaitgs * 0.2) + ($nilaiuts * 0.3) + ($nilaiuas * 0.4);


        if ($nilaiakhir >= 80) {
            $grade = 'A';
        } elseif ($nilaiakhir >= 70) {
            $grade = 'B';
        } elseif ($nilaiakhir >= 60) {
            $grade = 'C';
        } elseif ($nilaiakhir >= 50) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }

        $keterangan = ($nilaiakhir > 65) ? 'Lulus' : 'Tidak Lulus';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemweb2 | Pertemuan 3 | Latihan 2 | Output</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .output {
            border: 2px solid black;
            margin: 0 auto;
            width: 500px;
            padding: 0 20px;
            background-color: white;
            border-radius: 8px;
        }

        pre {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <pre>
        <div class="output">
            <center><p><b>NILAI AKADEMIK <?php echo $matkul ?></b></p></center>
            <p>Nama : <?php echo $nama; ?> </p>
            <p>NIM : <?php echo $nim; ?> </p>
            <P>Jumlah Kehadiran : <?php echo $jumlahkhdrn; ?>           Nilai Kehadiran  : <?php echo $nilaikhdrn; ?></P>
            <p>Nilai Tugas            : <?php echo $nilaitgs; ?>           Nilai UTS           : <?php echo $nilaiuts; ?></p>
            <p>Nilai UAS              : <?php echo $nilaiuas; ?>           Nilai Akhir           : <?php echo $nilaiakhir; ?></p>
            <P>Grade                    : <?php echo $grade; ?>             Keterangan        : <?php echo $keterangan; ?></p>
        </div>
    </pre>
</body>
</html>