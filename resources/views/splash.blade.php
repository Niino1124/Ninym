<!DOCTYPE html>
<html>
<head>
    <title>Splash Screen</title>

    <!-- Redirect -->
    <meta http-equiv="refresh" content="3;url={{ url('/login') }}">

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #ffffff;
            color: #000000;
            font-family: Arial;
        }

        img {
            width: 300px;
            margin-bottom: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>

    <img src="{{ asset('assets/logo.png') }}" alt="Logo">

</body>
</html>