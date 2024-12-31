<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Zaldi Store</title>
    <style>
            body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 4.0;
        }
        header {
            background-color:rgb(24, 2, 124);
            padding: 20px 10%;
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
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
            transition: color 0.3s;
        }
        nav a:hover {
            color:rgb(236, 39, 0);
        }
        .profile {
            padding: 50px;
            background: linear-gradient(135deg,rgb(237, 161, 55),rgb(107, 161, 21));
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 800px;
        }
        .profile h1 {
            font-size: 40px;
            color:#000000;
            margin-bottom: 20px;
        }
        .profile p {
            font-size: 20px;
            margin-bottom: 30px;
            color: #000000;
        }
        .profile img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-top: 20px;
            border: 5px solid #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .profile img:hover {
            transform: scale(1.1);
        }
        .team-members {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        .team-member {
            text-align: center;
            background-color: #fff;
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .team-member img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .team-member h3 {
            font-size: 25px;
            color: #000000;
            margin-bottom: 10px;
        }
        .team-member p {
            font-size: 14px;
            color: #000000;
        }
        footer {
            background-color: rgb(24, 2, 124); /* You can choose your preferred color */
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 50px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            color: #000000;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .section-title {
            font-size: 22px;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
            color: #000000;
        }
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        li {
            margin-bottom: 10px;
        }
        .quote {
            font-style: italic;
            color: #7f8c8d;
            margin-bottom: 20px;
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
    <section class="profile">
        <div class="team-members">
            <div class="team-member">
                <img src="{{ asset('images/zs.jpg') }}" alt="Team Member 1">
                <h3>Fariz Trisnaldi</h3>
                <p>CEO</p>
            </div>
        </div>
    <div class="container">
        <h1>Visi dan Misi</h1>
        
        <div class="section">
            <div class="section-title">Visi</div>
            <p class="content quote">"Menjadi toko pakan ikan terpercaya dan terbaik, menyediakan produk pakan berkualitas tinggi yang mendukung kesehatan dan pertumbuhan ikan peliharaan di seluruh Indonesia."</p>
        </div>

        <div class="section">
            <div class="section-title">Misi</div>
            <ul class="content">
                <li>Menyediakan pakan ikan berkualitas tinggi yang aman dan bergizi, untuk mendukung kesehatan dan pertumbuhan ikan peliharaan.</li>
                <li>Memberikan pelayanan terbaik dengan mengutamakan kepuasan pelanggan melalui pengiriman cepat dan konsultasi produk yang tepat.</li>
                <li>Meningkatkan edukasi pelanggan tentang pentingnya pakan ikan yang tepat, serta cara merawat ikan agar tetap sehat dan berkembang dengan baik.</li>
                <li>Membangun kemitraan dengan supplier dan peternak ikan untuk memastikan pasokan pakan ikan yang konsisten dan berkualitas.</li>
                <li>Berkomitmen terhadap kelestarian lingkungan dengan menyediakan produk-produk ramah lingkungan yang dapat mendukung keberlanjutan ekosistem perikanan.</li>
            </ul>
        </div>
    </div>
    </section>
    <footer>
        <p>&copy; 2024 Zaldi Store | All Rights Reserved</p>
    </footer>
</body>
</html>
