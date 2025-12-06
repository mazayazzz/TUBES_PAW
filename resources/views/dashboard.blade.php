<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Bioskop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header h1 { margin: 0; font-size: 28px; }
        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 0 20px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 20px;
        }
        .card {
            background-color: #fff;
            padding: 25px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            color: #333;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .card i {
            font-size: 40px;
            margin-bottom: 10px;
            color: #007BFF;
        }
        .logout-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #dc3545;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat datang, {{ auth()->user()->name }}</h1>
        <p>Dashboard Aplikasi Bioskop</p>
    </header>

    <div class="container">
        <div class="grid">
            <a class="card" href="{{ url('/film') }}">
                <i class="fas fa-film"></i>
                <div>Film</div>
            </a>
            <a class="card" href="{{ url('/jadwal') }}">
                <i class="fas fa-clock"></i>
                <div>Jadwal</div>
            </a>
            <a class="card" href="{{ url('/studio') }}">
                <i class="fas fa-building"></i>
                <div>Studio</div>
            </a>
            <a class="card" href="{{ url('/pelanggan') }}">
                <i class="fas fa-users"></i>
                <div>Pelanggan</div>
            </a>
            <a class="card" href="{{ url('/pemesanan') }}">
                <i class="fas fa-ticket-alt"></i>
                <div>Pemesanan</div>
            </a>
            <a class="card" href="{{ url('/pembayaran') }}">
                <i class="fas fa-credit-card"></i>
                <div>Pembayaran</div>
            </a>
            <a class="card" href="{{ url('/detail-tiket') }}">
                <i class="fas fa-receipt"></i>
                <div>Detail Tiket</div>
            </a>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>
</body>
</html>
