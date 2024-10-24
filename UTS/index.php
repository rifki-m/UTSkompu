<?php include "koneksi.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>My Portfolio</title>
    <style>
        /* Custom Font */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #007bff;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: white;
        }

        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }

        /* Hero Section */
        .position-relative {
            position: relative;
            text-align: center;
        }

        /* Image styling */
        .position-relative img {
            width: 100%;
            height: 90vh;
            object-fit: cover;
        }

        /* Overlay text */
        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            background: rgba(0, 0, 0, 0.5); /* Add a dark transparent background */
            padding: 20px;
            border-radius: 10px;
            width: 60%;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7); /* Text shadow for readability */
        }

        .text-overlay h3 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .text-overlay p {
            font-size: 1.25rem;
            font-weight: 300;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include "navbar.php"; ?>

    <!-- Hero Section -->
    <div class="position-relative">
        <img src="download.jpeg" class="img-fluid full-width-image" alt="Background Image">

        <?php
        // Query untuk mengambil data dari tabel students
        $query = "SELECT nama, deskripsi FROM students LIMIT 1"; // Mengambil satu entri pertama
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $nama = $row['nama']; // Kolom nama
            $deskripsi = $row['deskripsi']; // Kolom deskripsi
        ?>
            <div class="text-overlay">
                <h3><?php echo $nama; ?></h3>
                <p><?php echo $deskripsi; ?></p>
            </div>
        <?php
        } else {
            echo "<div class='text-overlay'><h3>No Data Found</h3></div>"; // Pesan jika tidak ada data
        }
        ?>
    </div>
    
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
