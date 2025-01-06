<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaldi Store - About</title>
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
            background-color: #f4f4f9;
            color: #000;
            line-height: 1.6;
            background: url('images/1.jpg') center/cover no-repeat;
        }

        /* Header Styling */
        header {
            background-color: #006d77;
            padding: 20px 10%;
            color:rgba(255, 255, 255, 0);
            box-shadow: 0 4px 6px rgba(255, 255, 255, 0);
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
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.2em;
            transition: color 0.3s;
        }
        nav a:hover {
            color:rgb(236, 39, 0);
        }

        /* Hero Section Styling */
        .hero {
            text-align: center;
            color: #ffffff;
            padding: 100px 20px;
        }
        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        /* About Section Styling */
        .about {
            max-width: 1200px;
            margin: 40px auto;
            padding: 40px;
            background-color:rgba(255, 255, 255, 0.16);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .about h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-align: center;
        }
        .about p {
            font-size: 1.2em;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Product Gallery Styling */
        .product-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            justify-items: center;
        }
        .product-item {
            text-align: center;
            background-color:rgba(255, 255, 255, 0.5);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease;
        }
        .product-item:hover {
            transform: translateY(-10px);
        }
        .product-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .product-name {
            font-size: 1.5em;
            color: #000;
            margin-top: 10px;
        }
        .product-price {
            font-size: 1.3em;
            color: #d62828;
            margin-top: 10px;
        }

        /* Footer Styling */
        footer {
            background-color: #006d77;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
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
    <section id="about" class="about">
        <h1>About Us</h1>
        <p>Kami berdedikasi untuk menyediakan pakan ikan, vitamin, dan obat-obatan berkualitas tinggi untuk memastikan ikan Anda sehat dan berkembang biak dengan baik. Baik Anda seorang pembudidaya ikan atau penghobi, kami memiliki semua yang Anda butuhkan untuk kesejahteraan ikan Anda.</p>
    </section>

    <section id="products" class="about">
        <h1>Our Products</h1>
        <div class="product-gallery">
            <div class="product-item">
                <img src="images/2.jpg" alt="Fish Medicine">
                <h3 class="product-name">Fish Medicine</h3>
                <p class="product-price">Rp 50,000</p>
            </div>
            <div class="product-item">
                <img src="images/3.jpg" alt="Fish Feed">
                <h3 class="product-name">Fish Feed</h3>
                <p class="product-price">Rp 250,000</p>
            </div>
            <div class="product-item">
                <img src="images/4.jpg" alt="Fish Vitamin">
                <h3 class="product-name">Fish Vitamin</h3>
                <p class="product-price">Rp 45,000</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Zaldi Store | Semua Hak Dilindungi</p>
    </footer>
</body>
</html>