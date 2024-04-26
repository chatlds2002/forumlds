<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat App</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
            max-width: 90%;
            text-align: center;
        }
        .card h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .card p {
            font-size: 16px;
            margin-bottom: 30px;
            color: #666;
        }
        .card a {
            display: inline-block;
            background-color: #4299e1;
            color: #fff;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .card a:hover {
            background-color: #2b6cb0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1>Welcome to Chat App</h1>
            <p>Join the conversation with friends and colleagues.</p>
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}">Go to Chat</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>
</html>
