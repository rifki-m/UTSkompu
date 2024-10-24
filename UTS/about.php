<?php include "koneksi.php"; ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <?php include "navbar.php"; ?>

    <div class="centered-card">
        <div class="card" style="width: 18rem;">
            <img src="2023071030.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h2>About Us</h2>
            <?php
            // Query untuk mengambil data dari tabel about
            $aboutQuery = "SELECT Nama, Tanggal_Lahir, Kota, hobby, Deskripsi FROM about LIMIT 1";
            $aboutResult = $conn->query($aboutQuery);

            if ($aboutResult->num_rows > 0) {
                // Mengambil data dari baris pertama hasil query
                $about = $aboutResult->fetch_assoc();
                $Nama = htmlspecialchars($about['Nama']);
                $Tanggal_Lahir = htmlspecialchars($about['Tanggal_Lahir']);
                $Kota = htmlspecialchars($about['Kota']);
                $hobby = htmlspecialchars($about['hobby']);
                $Deskripsi = htmlspecialchars($about['Deskripsi']);

                // Menampilkan data
                echo "<p>Nama: $Nama</p>";
                echo "<p>Tanggal Lahir: $Tanggal_Lahir</p>";
                echo "<p>Kota: $Kota</p>";
                echo "<p>Hobi: $hobby</p>";
                echo "<p>Deskripsi: $Deskripsi</p>";
            } else {
                echo "<p>Data tidak ditemukan.</p>";
            }
            ?>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>