<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemweb2 | Pertemuan 2 | Latihan 1</title>
    <style>
        label {
            margin-right: 20px;
            display: inline-block;
            width: 100px;
        }

        input {
            padding: 8px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .submit {
            margin-top: 20px;
            width: 315px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Latihan 1</h1>
    <form action="output.php" method="post" autocomplete="off">
        <label for="nama">Nama</label>: <input type="text" name="nama" id="nama" required><br>
        <label for="jurusan">Jurusan</label>: <input type="text" name="jurusan" id="jurusan" required><br>
        <label for="nilaitgs">Nilai Tugas</label>: <input type="number" name="nilaitgs" id="nilaitgs" required><br>
        <label for="nilaiuts">Nilai UTS</label>: <input type="number" name="nilaiuts" id="nilaiuts" required><br>
        <label for="nilaiuas">Nilai UAS</label>: <input type="number" name="nilaiuas" id="nilaiuas" required><br>
        <input class="submit" type="submit" value="Hitung">
    </form>
</body>
</html>
