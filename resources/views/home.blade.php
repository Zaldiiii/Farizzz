<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Toko Pakan Ikan</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        /* Header Styles */
        header {
            background-color: #006d77;
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
            color: rgb(236, 39, 0);
        }

        /* Hero Section */
        .home {
            text-align: center;
            background: url('images/1.jpg') center/cover no-repeat;
            padding: 170px 22%;
            position: relative;
            overflow: hidden;
            background-blend-mode: overlay;
        }
        .home h1 {
            font-size: 3.5em;
            margin-bottom: 10px;
            background-color:rgba(255, 255, 255, 0.16);
            padding: 10px;
            border: 2px solid rgba(255, 255, 255, 0);
            border-radius: 10px;
            display: inline-block;
            color: rgb(0, 0, 0);
        }
        .home p {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #000;
            background-color:rgba(255, 255, 255, 0.16);
            line-height: 1.6;
            padding: 10px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 10px;
            display: inline-block;
        }
        .home button {
            background-color: #006d77;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .home button:hover {
            background-color: #e55d50;
        }

        /* Footer Styles */
        footer {
            text-align: center;
            padding: 20px;
            background-color: #006d77;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin: 0;
            font-size: 1em;
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
        <h1>Selamat Datang di Toko Pakan Ikan</h1>
        <p>Kami menyediakan berbagai macam pakan ikan berkualitas tinggi untuk memastikan ikan Anda tumbuh sehat dan kuat.</p>
        <button onclick="window.location.href='/products'">Lihat Produk</button>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 Zaldi Store | Semua Hak Dilindungi</p>
    </footer>
</body>
</html>