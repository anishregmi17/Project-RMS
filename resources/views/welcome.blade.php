<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PNC Food Park Restaurant Management System</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/kTcC4mVKAvC6XJErwIJvH4kSWKj6ja7M6mO12R4GVtR1W7Vf0Hg2PswSXetGaa5TzR1W1Kufr0W/g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1em 2em;
            background-color: #ffffff;
            color: #333;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar a {
            color: #333;
            text-decoration: none;
            margin: 0 1em;
            font-weight: 600;
        }
        .navbar a:hover {
            color: #e67e22;
        }
        .navbar img {
            height: 50px;
            width: auto;
        }
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            min-height: 100vh;
            background: url('https://source.unsplash.com/1600x900/?gourmet-food') no-repeat center center/cover;
            color: #fff;
            padding: 2em;
            margin-top: 60px;
            box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.5);
            position: relative;
        }
        .hero h1 {
            font-size: 4em;
            margin-bottom: 0.5em;
            animation: fadeInDown 1s ease-out;
        }
        .hero p {
            font-size: 1.5em;
            margin-top: 1em;
            animation: fadeInUp 1s ease-out;
        }
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .footer {
            text-align: center;
            padding: 1em;
            background-color: #333;
            color: #fff;
            position: fixed;
            width: 100%;
            bottom: 0;
            box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
        }
        .footer p {
            margin: 0;
        }
        .btn-primary {
            padding: 10px 20px;
            background-color: #e67e22;
            color: #ffffff;
            border-radius: 5px;
            text-decoration: none;
            margin: 5px;
            display: inline-block;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #d35400;
        }
        .hero .icon {
            font-size: 3em;
            margin-bottom: 0.5em;
            animation: fadeIn 1s ease-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="antialiased">
    <div class="navbar">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="PNC Food Park Logo">
            </a>
        </div>
        <div class="auth-links">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="btn-primary">Enter to Management System</a>
                @else
                    <a href="{{ route('login') }}" class="btn-primary">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn-primary">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>

    <div class="hero">
        <div>
            <i class="fas fa-utensils icon"></i>
            <h1>Welcome to PNC Food Park</h1>
            <p>Experience the best dining with our top-notch services and gourmet dishes.</p>
            <a href="#menu" class="btn-primary">Visit Us</a>        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 PNC Food Park. All rights reserved.</p>
    </div>
</body>
</html>
