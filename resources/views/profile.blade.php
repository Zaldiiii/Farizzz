<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaldi Store - Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background: url('images/1.jpg') center/cover no-repeat;
        }
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
        .profile {
            text-align: center;
            margin: 50px auto;
            max-width: 1250px;
            background-color:rgba(255, 255, 255, 0.16);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .profile h1 {
            font-size: 40px;
            color: #000;
            margin-bottom: 20px;
        }
        .profile p {
            font-size: 20px;
            margin-bottom: 30px;
            color: #000;
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
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .team-member h3 {
            font-size: 25px;
            color: #000;
            margin-bottom: 10px;
        }
        .team-member p {
            font-size: 14px;
            color: #000;
        }
        footer {
            background-color: #006d77;
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
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            color: #000;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
            color: #000;
        }
        ul {
            list-style-type: disc;
            margin-left: 20px;
        }
        li {
            margin-bottom: 10px;
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
                <img src="{{ asset('images/zs.jpg') }}" alt="CEO">
                <h3>Fariz Trisnaldi</h3>
                <p>CEO</p>
            </div>
        </div>
    <div class="container">
        <h1>Visi dan Misi</h1>
        
        <div class="section">
            <h2>Visi</h2>
            <p class="content quote">"Menjadi toko pakan ikan terpercaya dan terbaik, menyediakan produk pakan berkualitas tinggi yang mendukung kesehatan dan pertumbuhan ikan peliharaan di seluruh Indonesia."</p>
        </div>

        <div class="section">
            <h2>Misi</h2>
            <ul class="content">
                <li>Menyediakan pakan ikan berkualitas tinggi yang aman dan bergizi untuk kesehatan dan pertumbuhan ikan.</li>
                <li>Memberikan pelayanan terbaik melalui pengiriman cepat dan konsultasi produk yang tepat.</li>
                <li>Mengedukasi pelanggan tentang pentingnya pakan ikan yang sesuai serta perawatan ikan yang optimal.</li>
                <li>Menjalin kemitraan dengan peternak ikan dan supplier terpercaya.</li>
                <li>Berkomitmen pada kelestarian lingkungan dengan produk ramah lingkungan.</li>
            </ul>
        </div>
    </div>
    </section>
    <footer>
        <p>&copy; 2024 Zaldi Store | Semua Hak Dilindungi</p>
    </footer>
</body>
</html>