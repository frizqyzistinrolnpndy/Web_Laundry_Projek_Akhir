<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Cleany Malang</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Cleany Malang Logo">
        </div>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#informasi">Informasi</a></li>
            <li><a href="#saran">Saran</a></li>
            <li><a href="{{ route('sign-in') }}">Akun</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section id="hero">
        <h1>Hi Laundries!</h1>
        <p>Cleany Malang hadir untuk menyediakan rekomendasi layanan laundry terbaik di Kota Malang untuk kebutuhan cuci bersih Anda!</p>
        <a href="#about" class="cta">Swipe Up!</a>
    </section>

    <!-- About Section -->
    <section id="about">
        <h2>About Cleany Malang</h2>
        <p>Apa itu Cleany Malang?</p>
        <p>Cleany Malang merupakan platform yang hadir untuk memudahkan Anda menemukan laundry terbaik di Kota Malang. Temukan berbagai pilihan laundry terdekat, paket layanan, ulasan pelanggan, dan panduan harga dalam satu platform.</p>
        <div class="features">
            <span>Informasi Lengkap</span>
            <span>Rating Terpercaya</span>
            <span>Akses Mudah</span>
        </div>
    </section>

    <!-- Informasi Laundry Section -->
    <section id="informasi">
        <h2>Informasi Laundry</h2>
        <div class="laundry-cards">
            <!-- Card example -->
            <div class="card">
                <img src="{{ asset('images/laundry1.png') }}" alt="Laundry Image">
                <h3>Le Choix Laundry</h3>
                <p>Tempat laundry berkelas di Malang dengan pelayanan terbaik.</p>
                <span>★★★★☆</span>
            </div>
            <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
        </div>
    </section>

    <!-- Saran Section -->
    <section id="saran">
        <h2>Saran</h2>
        <form action="#" method="POST">
            <input type="email" name="email" placeholder="Your E-Mail" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send!</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>Made by Team of Cleany Malang</p>
        <p>Need Collaboration? <a href="#">Contact Us!</a></p>
    </footer>
</body>
</html>
