<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Fish Feed Store</title>
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
            color:rgb(236, 39, 0);
        }
        .contact {
            padding: 50px;
            background-color:rgba(255, 255, 255, 0.16);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 50px auto;
            max-width: 800px;
        }
        .contact h1 {
            text-align: center;
            color: #000;
            margin-bottom: 30px;
            font-size: 36px;
        }
        .contact-info {
            text-align: center;
            margin-bottom: 30px;
        }
        .contact-info p {
            margin: 5px 0;
            font-size: 18px;
            color: #000;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        form input, form textarea {
            padding: 15px;
            font-size: 16px;
            border: 2px solid #000;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }
        form input:focus, form textarea:focus {
            border-color: #006d77;
            outline: none;
        }
        form button {
            padding: 15px;
            font-size: 18px;
            background-color: #006d77;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        form button:hover {
            background-color: #004d58;
        }
        footer {
            background-color: #006d77;
            color: #fff;
            text-align: center;
            padding: 15px;
            margin-top: 50px;
        }
        footer p {
            margin: 0;
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
    <section class="contact">
        <h1>Contact Us</h1>
        <div class="contact-info">
            <p><strong>Alamat:</strong> Jl. Ikan Mas No. 456, Banyumas, Indonesia</p>
            <p><strong>No WA:</strong> +62 812 3456 7890</p>
            <p><strong>Email:</strong> zaldistore@gmail.com</p>
            <p><strong>Jam Kerja:</strong> Senin - Jumat, 9:00 AM - 5:00 PM</p>
        </div>
        <form action="/contact" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Nama Anda" required>
            <input type="email" name="email" placeholder="Email Anda" required>
            <textarea name="message" placeholder="Pesan Anda" rows="5" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2025 Zaldi Store | Semua Hak Dilindungi</p>
    </footer>
</body>
</html>