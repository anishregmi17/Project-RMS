<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PNC Food Park Restaurant Management System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* Tailwind CSS v3.2.4 | MIT License | https://tailwindcss.com */
            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1em;
                background-color: #594a40;
                color: #fff;
                position: fixed;
                width: 100%;
                top: 0;
                z-index: 1000;
            }
            .navbar a {
                color: #fff;
                text-decoration: none;
                margin: 0 1em;
            }
            .hero {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
                min-height: 80vh;
                background: url('https://source.unsplash.com/1600x900/?restaurant') no-repeat center center/cover;
                color: #fff;
                font-family: 'Figtree', sans-serif;
                padding: 2em;
                margin-top: 60px;
            }
            .hero h1 {
                font-size: 3em;
                text-shadow: 2px 2px 5px #000;
            }
            .hero p {
                font-size: 1.5em;
                margin-top: 1em;
                text-shadow: 1px 1px 3px #000;
            }
            .footer {
                text-align: center;
                padding: 1em;
                background-color: #594a40;
                color: #fff;
                position: fixed;
                width: 100%;
                bottom: 0;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="navbar">
            <div class="logo">
                <a href="#">PNC Food Park</a>
            </div>
            <div class="auth-links">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}">Enter to Management System</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>

        <div class="hero">
            <div>
                <h1>Welcome to PNC Food Park</h1>
                <p>Experience the best dining with our top-notch services and gourmet dishes.</p>
            </div>
        </div>

        <div class="footer">
            &copy; 2024 PNC Food Park. All rights reserved.
        </div>
    </body>
</html>
