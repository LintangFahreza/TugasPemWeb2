<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemweb2 | Pertemuan 2 | Latihan 1 | Output</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        p {
            margin: 0;
        }
    </style>
</head>

<body>
    <h2>OUTPUT DATA</h2>
    <h3>(Pengunaan function if)</h3>
    <?php
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $nilaitgs = $_POST['nilaitgs'];
    $nilaiuts = $_POST['nilaiuts'];
    $nilaiuas = $_POST['nilaiuas'];
    $ratarata = ($nilaitgs + $nilaiuts + $nilaiuas) / 3;
    ?>
    <table>
        <tr>
            <td>
                <p><b>Nama : </b><?php echo $nama ?></p>
            </td>
            <td>
                <p><b>Jurusan : </b><?php echo $jurusan ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p><b>Nilai Tugas : </b><?php echo $nilaitgs ?></p>
            </td>
            <td>
                <p><b>Nilai UTS : </b><?php echo $nilaiuts ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p><b>Nilai UAS : </b><?php echo $nilaiuas ?></p>
            </td>
            <td>
                <p><b>Rata-rata : </b><?php echo $ratarata ?></p>
            </td>
        </tr>
    </table>
</body>

</html>