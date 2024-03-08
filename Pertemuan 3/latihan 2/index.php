<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemweb2 | Pertemuan 3 | Latihan 2</title>
    <style>
        label {
            margin-right: 20px;
            display: inline-block;
            width: 150px;
        }

        input {
            width: 300px;
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        select{
            width: 300px;
            height: 30px;
            margin-bottom: 10px;
        }

        .nilai{
            width: 100px;
        }

        .submit {
            margin-top: 40px;
            width: 240px;
            border-radius: 5px;
            margin-left: 120px;
        }
    </style>
</head>
<body>
    <h1>Pertemuan 3 | Latihan 2</h1>
    <form action="output.php" method="post" autocomplete="off">
        <label for="nama">Nama</label>: <input type="text" name="nama" id="nama" required><br>
        <label for="nim">Nim</label>: <input type="text" name="nim" id="nim" maxlength="12" required><br>
        <label for="matkul">Mata Kuliah</label>:
        <select name="matkul" required>
            <option value="">Pilih Mata Kuliah</option>
            <option value="PEMROGRAMAN WEB 2">Pemrograman Web 2</option>
            <option value="MOBILE PROGRAMMING">Mobile Programming</option>
            <option value="KECERDASAN BUATAN">Kecerdasan Buatan</option>
            <option value="KERJA PRAKTEK">Kerja Praktek</option>
        </select><br>
        <label for="jumlahkhdrn">Jumlah Kehadiran</label>: <input type="number" name="jumlahkhdrn" id="jumlahkhdrn" class="nilai" min="1" max="18" required><br>
        <label for="nilaitgs">Nilai Tugas</label>: <input type="number" name="nilaitgs" id="nilaitgs" class="nilai" min="1" max="100" required><br>
        <label for="nilaiuts">Nilai UTS</label>: <input type="number" name="nilaiuts" id="nilaiuts" class="nilai" min="1" max="100" required><br>
        <label for="nilaiuas">Nilai UAS</label>: <input type="number" name="nilaiuas" id="nilaiuas" class="nilai" min="1" max="100"  required><br>
        <input class="submit" type="submit" value="INPUT DATA">
    </form>
</body>
</html>

