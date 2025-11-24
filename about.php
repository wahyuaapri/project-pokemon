<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .header {
            background: linear-gradient(135deg, #4e73df, #224abe);
            padding: 40px;
            text-align: center;
            color: white;
        }

        .header h1 {
            margin: 0;
            font-size: 42px;
            letter-spacing: 2px;
        }

        .container {
            width: 80%;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0px 4px 18px rgba(0,0,0,0.1);
            animation: fadeIn 0.7s ease;
        }

        .section-title {
            font-size: 26px;
            margin-bottom: 10px;
            color: #224abe;
        }

        .team {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .team-card {
            background: #ffffff;
            width: 200px;
            padding: 20px;
            border-radius: 14px;
            box-shadow: 0px 4px 14px rgba(0,0,0,0.08);
            text-align: center;
            transition: 0.3s;
        }

        .team-card:hover {
            transform: translateY(-6px);
            box-shadow: 0px 8px 20px rgba(0,0,0,0.15);
        }

        .team-card img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .team-card h4 {
            margin: 5px 0 2px;
            font-size: 18px;
        }

        .team-card p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>

<div class="header">
    <h1>About Our Project</h1>
</div>

<div class="container">
    <h2 class="section-title">Apa ini?</h2>
    <p>
        Ini adalah project kelompok yang bertujuan untuk mempelajari bagaimana menggunakan Git, GitHub, 
        dan kolaborasi modern dalam software development. Setiap anggota membuat fitur berbeda menggunakan branch masing-masing, lalu digabung melalui Pull Request.
    </p>

    <h2 class="section-title">Tujuan Project</h2>
    <ul>
        <li>Membiasakan workflow GitHub Flow</li>
        <li>Belajar kolaborasi dalam tim developer</li>
        <li>Mempraktikkan commit, push, branch, dan Pull Request</li>
        <li>Membuat halaman web sederhana berbasis PHP</li>
    </ul>

    <h2 class="section-title">Anggota Kelompok</h2>
    <div class="team">
        <div class="team-card">
            <img src="https://ui-avatars.com/api/?name=Nama+1" alt="">
            <h4>Nama 1</h4>
            <p>Developer</p>
        </div>

        <div class="team-card">
            <img src="https://ui-avatars.com/api/?name=Nama+2" alt="">
            <h4>Nama 2</h4>
            <p>Developer</p>
        </div>

        <div class="team-card">
            <img src="https://ui-avatars.com/api/?name=Nama+3" alt="">
            <h4>Nama 3</h4>
            <p>Developer</p>
        </div>

        <div class="team-card">
            <img src="https://ui-avatars.com/api/?name=Nama+4" alt="">
            <h4>Nama 4</h4>
            <p>Developer</p>
        </div>
    </div>
</div>

</body>
</html>
