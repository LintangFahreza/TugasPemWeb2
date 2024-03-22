<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input {
            margin-bottom: 20px;
        }

        button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php
    $namafile = "bukutamu.dat";
    if (isset($_POST["kirim"])) {
        if (!file_exists($namafile)) {
            $file = fopen($namafile, "w");
            fclose($file);
        }

        $name = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        $file = fopen($namafile, 'a+');
        $output =   "Nama : $name\n" .
            "Email : $email\n" .
            "Komentar : $komentar\n";

        fwrite($file, $output);
        fclose($file);

        echo "Data Tersimpan";
    }
    ?>

    <h1>Buku tamu php</h1>
    <form action="" method="post">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" id="nama" required><br>
        <label for="email"> Email : </label>
        <input type="email" name="email" id="email" required><br>
        <label for="komentar">Komentar :</label>
        <textarea name="komentar" id="komentar" cols="30" rows="5"></textarea><br>
        <button type="submit" name="kirim">Simpan</button>
    </form>
</body>

</html>