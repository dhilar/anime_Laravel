<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi - Anime World</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 20px;
            background-color: #e74c3c;
            color: white;
            position: relative;
        }
        .header h1 {
            margin: 0;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            color: #e74c3c;
        }
        .timeline {
            margin: 20px 0;
            padding: 20px;
            border-left: 4px solid #e74c3c;
            background-color: #fdfdfd;
        }
        .timeline p {
            margin: 0;
            padding: 10px 0;
        }
        .timeline .date {
            font-weight: bold;
            color: #e74c3c;
        }
        .update-section {
            margin: 20px 0;
        }
        .update-section ul {
            list-style-type: none;
            padding: 0;
        }
        .update-section li {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-left: 4px solid #3498db;
        }
        .home-link {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 16px;
        }
        .home-link a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .home-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header class="header">
        <h1>Informasi Tentang Anime World</h1>
        <p>Temukan semua informasi tentang website kami di sini</p>
        <!-- Link ke Home di pojok kanan atas -->
        <div class="home-link">
            <a href="{{ url('/') }}">Home</a>
        </div>
    </header>

    <div class="timeline">
        <p class="date">1 Januari 2023</p>
        <p>Pendirian website Anime World. Kami memulai perjalanan dengan beberapa anime populer untuk menarik minat para penggemar anime di seluruh Indonesia.</p>
        <p class="date">Februari 2023</p>
        <p>Penambahan fitur pencarian dan kategori untuk memudahkan pengguna menemukan anime favorit mereka.</p>
        <p class="date">Mei 2023</p>
        <p>Kerja sama dengan berbagai fansub untuk menyediakan subtitle berkualitas tinggi dalam bahasa Indonesia.</p>
        <p class="date">Agustus 2023</p>
        <p>Penambahan fitur streaming resolusi tinggi dan optimasi website untuk performa yang lebih cepat.</p>
    </div>

    <section class="container">
        <div class="content">
            <h2>Sejarah dan Latar Belakang</h2>
            <p><strong>Anime World</strong> didirikan pada 1 Januari 2023...</p>
            <!-- Konten lainnya -->
        </div>
    </section>

</body>
</html>
