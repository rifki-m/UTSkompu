<?php include "koneksi.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
        .flex-container {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            flex-wrap: wrap; /* Allows cards to wrap to the next line if needed */
            height: 100vh; /* Full height of the viewport */
        }
        .card {
            margin: 10px; /* Adds space between cards */
        }

        
    </style>
</head>
<body>
    <?php include "navbar.php"; ?>

    <div class="flex-container">
        <?php
        // Query untuk mengambil data dari tabel project
        $query = "SELECT nama_projek, projek_deskripsi, gambar_projek FROM projects LIMIT 2"; // Mengambil dua entri pertama
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Menampilkan data untuk setiap entri
            while ($row = mysqli_fetch_assoc($result)) {
                // Ambil data yang dibutuhkan dari hasil query
                $nama_projek = $row['nama_projek']; // Kolom nama_projek
                $projek_deskripsi = $row['projek_deskripsi']; // Kolom deskripsi_projek
                $gambar_projek = $row['gambar_projek']; // Kolom gambar_projek
        ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $gambar_projek; ?>" class="card-img-top" alt="<?php echo $nama_projek; ?>">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $nama_projek; ?></h4>
                        <p class="card-text"><?php echo $projek_deskripsi; ?></p>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "<p>No projects found.</p>"; // Pesan jika tidak ada data
        }
        ?>
    </div>
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
