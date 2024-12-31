<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Zaldi Store</title>
    <style>
        /* Global Styles */
            body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 4.0;
        }

        /* Header Styles */
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

        .home {
            text-align: center;
            background: url('images/zs.jpg') center/cover no-repeat;
            color:rgb(0, 153, 255);
            padding: 100px 10%;
            position: relative;
            overflow: hidden;
            background-blend-mode: overlay;
        }
        .home h1 {
            font-size: 3.5em;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px #000;
            background-color: transparent; /* Made the background transparent */
        }
        .home p {
            font-size: 1.5em;
            margin-bottom: 40px;
            text-shadow: 5px 5px 10px #000;
            line-height: 1.6;
            background-color: transparent; /* Made the background transparent */
        }
        .home button {
            background-color:rgb(255, 255, 255);
            border: none;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            background-color: transparent; /* Made the background transparent */
        }
        .home button:hover {
            background-color: #fff;
        }

        /* Decorative Elements */
        .home::before {
            content: '';
            position: absolute;
            top: -50px;
            left: -50px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            z-index: 1;
        }
        .home::after {
            content: '';
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            z-index: 1;
        }
            footer {
        text-align: center;
        padding: 20px;
        background-color: rgb(24, 2, 124); /* You can choose your preferred color */
        color: white;
        position: relative;
        bottom: 0;
        width: 100%;
    }
    footer p {
        margin: 0;
        font-size: 1em;
    }

        /* Responsive Design */
        @media (max-width: 1000px) {
            .home h1 {
                font-size: 2.5em;
            }
            .home p {
                font-size: 1.2em;
            }
    }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/profile">Profile</a>
            <a href="/contact">Contact</a>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="home">
        <h1>Welcome to Our Zaldi Store</h1>
        <p>Kami dengan bangga menyediakan berbagai pilihan pakan ikan berkualitas untuk memastikan ikan peliharaan Anda tumbuh sehat dan bahagia.</p>
        <button>Order Now</button>
    </section>

    <footer>
        <p>&copy; 2024 Zaldi Store | All Rights Reserved</p>
    </footer>
</body>
</html>
