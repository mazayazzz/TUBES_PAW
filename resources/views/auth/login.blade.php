<!DOCTYPE html>
<html>
<head>
    <title>Login - Aplikasi Bioskop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 25px;
            color: #007BFF;
        }
        .login-container form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left;
        }
        .login-container form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .login-container form button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .login-container form button:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: #dc3545;
            margin-top: 10px;
            font-weight: bold;
        }
        .login-icon {
            font-size: 50px;
            color: #007BFF;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <i class="fas fa-user-circle login-icon"></i>
        <h2>Login</h2>
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <label>Email:</label>
            <input type="email" name="email" placeholder="Masukkan email" required>
            
            <label>Password:</label>
            <input type="password" name="password" placeholder="Masukkan password" required>
            
            <button type="submit">Login</button>
            <p class="mt-4">
                Belum punya akun? <a href="{{ route('register.form') }}" class="text-blue-500">Daftar di sini</a>
            </p>
        </form>

        @if($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif
    </div>
</body>
</html>
