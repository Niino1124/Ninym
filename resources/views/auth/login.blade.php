<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 340px;
            text-align: center;
        }

        .logo {
            margin-bottom: 10px;
        }

        .logo img {
        width: 200px;
        display: block;
        margin: 0 auto;
        cursor: default;
        user-select: none;
        -webkit-user-drag: none; /* biar ga bisa di-drag */
        }

        .input-group {
            margin-bottom: 18px;
        }

        input {
            width: 100%;
            padding: 14px 18px;
            border-radius: 25px;
            border: none;
            outline: none;
            background: #ffffff;
            font-size: 14px;
        }

        .password-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 14px;
        }

        .btn-login {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 25px;
            background: #6cc24a;
            color: white;
            font-size: 15px;
            margin-top: 8px;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #5aa63d;
        }

        .link {
            margin-top: 12px;
            display: block;
            color: #6cc24a;
            text-decoration: none;
            font-size: 13px;
        }

        .register {
            margin-top: 8px;
            font-size: 13px;
        }

        .register a {
            color: #6cc24a;
            text-decoration: none;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 25px 0;
        }

        .divider hr {
            flex: 1;
            border: none;
            border-top: 1px solid #ddd;
        }

        .divider span {
            margin: 0 10px;
            font-size: 12px;
            color: #888;
        }

        .social-text {
            font-size: 13px;
            margin-bottom: 12px;
            color: #555;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 18px;
        }

        .social-icons img {
            width: 36px;
            cursor: pointer;
            transition: 0.2s;
        }

        .social-icons img:hover {
            transform: scale(1.1);
        }

        @media (max-width: 400px) {
            .container {
                padding: 0 15px;
            }

            .logo img {
                width: 160px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <!-- LOGO -->
    <div class="logo">
        <img src="{{ asset('assets/logo.png') }}" alt="Logo">
    </div>

    <!-- FORM LOGIN -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- EMAIL -->
        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required autofocus>
        </div>

        <!-- PASSWORD -->
        <div class="input-group password-wrapper">
            <input type="password" name="password" id="password" placeholder="Password" required minlength="6">
            <span class="toggle-password" onclick="togglePassword()">👁</span>
        </div>

        <!-- BUTTON LOGIN -->
        <button type="submit" class="btn-login">Login</button>

        <!-- FORGOT PASSWORD -->
        <a href="{{ route('password.request') }}" class="link">Forgot Password?</a>

        <!-- REGISTER -->
        <div class="register">
            Don't have an account?
            <a href="{{ route('register') }}">Register here</a>
        </div>
    </form>

    <!-- DIVIDER -->
    <div class="divider">
        <hr><span>OR</span><hr>
    </div>

    <!-- SOCIAL TEXT -->
    <div class="social-text">
        Continue with Social Network
    </div>

    <!-- SOCIAL LOGIN -->
    <div class="social-icons">
        <a href="#" onclick="alert('Login Google belum tersedia')">
            <img src="{{ asset('assets/ic_google.png') }}" alt="Google">
        </a>

        <a href="#" onclick="alert('Login Facebook belum tersedia')">
            <img src="{{ asset('assets/ic_facebook.webp') }}" alt="Facebook">
        </a>
    </div>

</div>

<script>
function togglePassword() {
    let input = document.getElementById("password");
    input.type = input.type === "password" ? "text" : "password";
}
</script>

</body>
</html>