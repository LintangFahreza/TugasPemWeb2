<!DOCTYPE html>
<html>

<head>
    <title>Input Data Klasemen Piala Asia U-23 Qatar Group B</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .judul {
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <?php
    $namaOperator = '';
    $nimMahasiswa = '';
    $tanggalSekarang =  date('d-F-Y');

    // Fungsi untuk menyimpan data ke dalam file db.html
    function saveToHTML($data)
    {
        $file = fopen("db.html", "a") or die("Unable to open file!");
        fwrite($file, $data);
        fclose($file);
    }

    // Jika tombol submit diklik
    if (isset($_POST['submit'])) {
        // Ambil nilai dari form
        $namaOperator = $_POST["nama_operator"];
        $nimMahasiswa = $_POST["nim_mahasiswa"];
        $namaNegara = $_POST["nama_negara"];
        $jumlahPertandingan = $_POST["jumlah_pertandingan"];
        $jumlahMenang = $_POST["jumlah_menang"];
        $jumlahSeri = $_POST["jumlah_seri"];
        $jumlahKalah = $_POST["jumlah_kalah"];
        $jumlahPoin = $_POST["jumlah_poin"];


        // Format data ke dalam HTML
        $data = "<tr>";
        $data .= "<td>$namaNegara</td>";
        $data .= "<td>$jumlahPertandingan</td>";
        $data .= "<td>$jumlahMenang</td>";
        $data .= "<td>$jumlahSeri</td>";
        $data .= "<td>$jumlahKalah</td>";
        $data .= "<td>$jumlahPoin</td>";
        $data .= "</tr>";

        // Simpan data ke dalam file db.html
        saveToHTML($data);
    }
    ?>

    <h2>Input Data Klasemen Piala Asia U-23 Qatar Group B</h2>
    <form method="post" action="">
        <label>Nama Negara:</label>
        <select name="nama_negara">
            <option value="Korea Selatan U-23">Korea Selatan U-23</option>
            <option value="Jepang U-23">Jepang U-23</option>
            <option value="Tiongkok U-23">Tiongkok U-23</option>
            <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
        </select><br><br>
        <label>Jumlah Pertandingan:</label>
        <input type="number" name="jumlah_pertandingan"><br><br>
        <label>Jumlah Menang:</label>
        <input type="number" name="jumlah_menang"><br><br>
        <label>Jumlah Seri:</label>
        <input type="number" name="jumlah_seri"><br><br>
        <label>Jumlah Kalah:</label>
        <input type="number" name="jumlah_kalah"><br><br>
        <label>Jumlah Poin:</label>
        <input type="number" name="jumlah_poin"><br><br>
        <label>Nama Operator:</label>
        <input type="text" name="nama_operator"><br><br>
        <label>NIM Mahasiswa:</label>
        <input type="text" name="nim_mahasiswa"><br><br>
        <input type="submit" name="submit" value="Simpan Data">
    </form>
    <div class="judul">
        <h2>Data Klasemen Piala Asia U-23 Qatar Group B</h2>
        <P><?= $tanggalSekarang ?></P>
        <p><b><?= $namaOperator ?> / <?= $nimMahasiswa ?></p>
    </div>
    <table>
        <tr>
            <th>Nama Negara</th>
            <th>P</th>
            <th>M</th>
            <th>S</th>
            <th>K</th>
            <th>Jumlah Poin</th>
        </tr>
        <?php echo file_get_contents("db.html"); ?>
    </table>

</body>

</html>