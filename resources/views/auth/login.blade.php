<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - PAUD TERPADU AZIFA</title>
    <link rel="shortcut icon" href="{{ asset('assets/landing/images/Favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/landing/css/responsive.css') }}">
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #bfe6ff 0%, #eaf6ff 50%, #fff 100%);
            font-family: 'Mulish', sans-serif;
        }
        .login-wrapper {
            width: 100%;
            max-width: 420px;
            padding: 20px;
        }
        .login-card {
            background: #fff;
            border-radius: 24px;
            padding: 40px 36px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.08);
        }
        .login-logo {
            text-align: center;
            margin-bottom: 8px;
        }
        .login-logo img {
            width: 64px;
            height: 64px;
        }
        .login-title {
            text-align: center;
            font-size: 22px;
            font-weight: 700;
            color: #333;
            margin-bottom: 6px;
        }
        .login-subtitle {
            text-align: center;
            font-size: 14px;
            color: #888;
            margin-bottom: 28px;
        }
        .login-form .form-group {
            margin-bottom: 18px;
        }
        .login-form label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #555;
            margin-bottom: 6px;
        }
        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e8e8e8;
            border-radius: 12px;
            font-size: 14px;
            color: #333;
            outline: none;
            transition: border-color 0.2s;
            box-sizing: border-box;
        }
        .login-form input:focus {
            border-color: #7ec8e3;
        }
        .login-form .form-check {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
        }
        .login-form .form-check input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: #7ec8e3;
        }
        .login-form .form-check label {
            margin-bottom: 0;
            font-size: 13px;
            color: #666;
        }
        .login-btn {
            width: 100%;
            padding: 13px;
            background: linear-gradient(135deg, #7ec8e3, #a8d8ea);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(126,200,227,0.4);
        }
        .login-error {
            background: #fff0f0;
            color: #e74c3c;
            border-radius: 10px;
            padding: 12px 16px;
            font-size: 13px;
            margin-bottom: 18px;
        }
        .login-back {
            text-align: center;
            margin-top: 18px;
        }
        .login-back a {
            color: #888;
            font-size: 13px;
            text-decoration: none;
        }
        .login-back a:hover {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-card">
            <div class="login-logo">
                <img loading="lazy" src="{{ asset('assets/landing/images/Favicon.png') }}" alt="Azifa">
            </div>
            <h1 class="login-title">Selamat Datang</h1>
            <p class="login-subtitle">Masuk ke akun guru Anda</p>

            @if ($errors->any())
                <div class="login-error">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukkan email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required placeholder="Masukkan password">
                </div>

                <div class="form-check">
                    <input id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Ingat saya</label>
                </div>

                <button type="submit" class="login-btn">Masuk</button>
            </form>

            <div class="login-back">
                <a href="{{ route('landing') }}">&#8592; Kembali ke beranda</a>
            </div>
        </div>
    </div>
</body>
</html>
