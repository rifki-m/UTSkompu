<?php include "koneksi.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Kontak Saya</title>
    <style>
        .flex-container {
            display: flex;
            flex-wrap: wrap; /* Membuat kartu membungkus ke baris berikutnya jika perlu */
            justify-content: center; /* Menyusun kartu di tengah */
            gap: 1rem; /* Menambahkan jarak antara kartu */
            padding: 1rem; /* Menambahkan padding di dalam kontainer */
        }
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="flex-container">
        <?php
        // Query untuk mengambil data dari tabel contact
        $query = "SELECT email, nomor FROM contact"; // Ambil email dan nomor
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Menampilkan data untuk setiap entri
            while ($row = mysqli_fetch_assoc($result)) {
                // Ambil data yang dibutuhkan dari hasil query
                $email = $row['email']; // Kolom email
                $nomor = $row['nomor']; // Kolom nomor
        ?>
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">Kontak Saya</div>
                    <div class="card-body">
                        <h5 class="card-title">Email : <?php echo $email; ?></h5>
                        <p class="card-text">Nomor Telp : <?php echo $nomor; ?></p>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>No contacts found.</p>"; // Pesan jika tidak ada data
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
