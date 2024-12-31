<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Zaldi Store</title>
    <style>
        /* General Reset and Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #000000;
            color: #e0e0e0; /* Light text color for better readability */
            line-height: 4.0;
        }

         /* Header Styles */
        header {
            background-color:rgb(24, 2, 124);
            padding: 20px 10%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: #ffff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
            transition: color 0.3s;
        }
        nav a:hover {
            color:rgb(236, 39, 0);
        }

        /* About Section Styling */
        .about {
            max-width: 1200px;
            margin: 40px auto;
            padding: 40px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .about h1 {
            font-size: 32px;
            color: #000;
            margin-bottom: 20px;
            text-align: center;
        }
        .about p {
            font-size: 18px;
            color: #000;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Product Gallery Styling */
        .product-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            justify-items: center;
        }
        .product-gallery img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .product-gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        /* About Section Styles */
        .about {
            text-align: center;
            padding: 50px 10%;
            background-color: #f8f8f8;
        }

        .about h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #000;
        }

        .about p {
            font-size: 1.2em;
            color: #000;
            margin-bottom: 40px;
        }

        /* Product Gallery Styles */
        .about .product-gallery {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            flex-wrap: wrap;
        }

        .about .product-item {
            text-align: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 30%;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .about .product-item:hover {
            transform: translateY(-10px);
        }

        /* Product Name and Price Styles */
        .about .product-name {
            font-size: 1.6em;
            margin-top: 15px;
            color: #000;
        }

        .about .product-price {
            font-size: 1.4em;
            color: rgb(236, 39, 0); /* Price color */
            margin-top: 10px;
        }

        /* Footer Styling */
            footer {
        background-color: rgb(24, 2, 124); /* You can choose your preferred color */
        color: #ffffff; /* Warna teks tetap hitam */
        text-align: center;
        padding: 20px 0;
        position: fixed; /* Tetapkan posisi tetap */
        bottom: 0; /* Tempatkan di bawah */
        left: 0; /* Atur ke sisi kiri */
        width: 100%; /* Lebar penuh */
        box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1); /* Tambahkan sedikit bayangan untuk estetika */
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/profile">Profile</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>
    
<section class="about">
    <h1>About Our Zaldi Store</h1>
    <p>Kami menawarkan pilihan Pelet,Vitamin, dan Obat Ikan lele yang bisa jadi sehat dan tumbuh subur untuk memuaskan semua keinginan Anda, cocok untuk Ikan lele.</p>
    <div class="product-gallery">
        <div class="product-item">
            <img src="{{ asset('images/obat lele.jpg') }}" alt="Delicious Dish 1">
            <h3 class="product-name">Obat Lele</h3> <!-- Name of the first dish -->
            <p class="product-price">Rp 50,000</p> <!-- Price for the first dish -->
        </div>
        <div class="product-item">
            <img src="{{ asset('images/pakanlele.jpg') }}" alt="Delicious Dish 2">
            <h3 class="product-name">Pakan Lele</h3> <!-- Name of the second dish -->
            <p class="product-price">Rp 250,000</p> <!-- Price for the second dish -->
        </div>
        <div class="product-item">
            <img src="{{ asset('images/vitamin.jpg') }}" alt="Delicious Dish 3">
            <h3 class="product-name">Vitamin Ikan</h3> <!-- Name of the third dish -->
            <p class="product-price">Rp 45,000</p> <!-- Price for the third dish -->
        </div>
    </div>
</section>


    <footer>
        <p>&copy; 2024 Zaldi Store | All Rights Reserved</p>
    </footer>
</body>
</html>
