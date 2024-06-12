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
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #c4c3c3;
                margin: 0;
                padding: 0;
            }
            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1em;
                background-color: #ffffff;
                color: #594a40;
                position: fixed;
                width: 100%;
                top: 0;
                z-index: 1000;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            }
            .navbar a {
                color: #594a40;
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
                color: #bf6969;
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

            .content h2 {
                color: #594a40;
                text-align: center;
                margin-bottom: 1em;
            }
            .content p {
                color: #594a40;
                margin-bottom: 1em;
            }
            .content ul {
                list-style-type: disc;
                padding-left: 20px;
                color: #594a40;
            }
            .footer {
                text-align: center;
                padding: 1em;
                background-color: #ffffff;
                color: #594a40;
                position: fixed;
                width: 100%;
                bottom: 0;
                box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
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
                    <a href="{{ route('login') }}" style="padding: 10px 20px; background-color: #594a40; color: #ffffff; border-radius: 5px; text-decoration: none;">Log in</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" style="padding: 10px 20px; background-color: #fbbd61; color: #ffffff; border-radius: 5px; text-decoration: none; margin-left: 10px;">Register</a>                        @endif
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
