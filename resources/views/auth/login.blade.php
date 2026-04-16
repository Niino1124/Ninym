<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- FONT MONTSERRAT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">

    <style>
        /* GLOBAL FIX */
        body {
            cursor: default;
            user-select: none;
        }

        input, textarea {
            user-select: text;
            cursor: text;
        }

        a, button {
            cursor: pointer;
        }

        img {
            user-select: none;
            -webkit-user-drag: none;
        }

        * {
            box-sizing: border-box;
        }

        /* FONT */
        body, input, button, a {
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333333;
        }

        .container {
            width: 100%;
            max-width: 340px;
            text-align: center;
            margin-top: -90px;
        }

        /* LOGO */
        .logo {
            margin-bottom: 10px;
        }

        .logo img {
            width: 220px;
        }

        .input-group {
            margin-bottom: 16px;
            position: relative;
        }

        /* INPUT */
        input {
            width: 100%;
            padding: 14px 18px;
            border-radius: 25px; /* TUMPUL */
            border: none;
            outline: none;
            background: #f9f9f9;
            font-size: 14px;
            color: #333333;

            /* GARIS BAWAH */
            border-bottom: 2px solid transparent;
        }

        /* PLACEHOLDER */
        input::placeholder {
            color: #808080;
        }

        /* FOCUS → GARIS HIJAU */
        input:focus {
            border-bottom: 2px solid #7ED957;
            background: #f9f9f9;
        }

        /* FIX AUTOFILL GOOGLE */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus {
            -webkit-box-shadow: 0 0 0 1000px #f9f9f9 inset !important;
            box-shadow: 0 0 0 1000px #f9f9f9 inset !important;
            -webkit-text-fill-color: #333333 !important;
        }

        /* PASSWORD */
        .password-wrapper {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            cursor: pointer;
            opacity: 0.6;
        }

        .toggle-password:hover {
            opacity: 1;
        }

        /* BUTTON */
        .btn-login {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 25px;
            background: #7ED957;
            color: white;
            font-size: 15px;
            margin-top: 6px;
        }

        .btn-login:hover {
            background: #6bc94a;
        }

        .link {
            margin-top: 10px;
            display: block;
            color: #7ED957;
            text-decoration: none;
            font-size: 13px;
        }

        .register {
            margin-top: 20px;
            font-size: 13px;
        }

        .register a {
            color: #7ED957;
            text-decoration: none;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .divider hr {
            flex: 1;
            border: none;
            border-top: 1px solid #333333;
        }

        .divider span {
            margin: 0 10px;
            font-size: 12px;
            color: #333333;
        }

        .social-text {
            font-size: 13px;
            margin-bottom: 10px;
            color: #333333;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 18px;
        }

        .social-icons img {
            width: 36px;
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
                width: 150px;
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

    <!-- FORM -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required autofocus>
        </div>

        <div class="input-group password-wrapper">
            <input type="password" name="password" id="password" placeholder="Password" required>

            <span class="toggle-password" onclick="togglePassword()">
                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 24 24" fill="none" stroke="#808080"
                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>
            </span>
        </div>

        <button type="submit" class="btn-login">Login</button>

        <a href="{{ route('password.request') }}" class="link">Forgot Password?</a>

        <div class="register">
            Don't have an account?
            <a href="{{ route('register') }}">Register here</a>
        </div>
    </form>

    <div class="divider">
        <hr><span>OR</span><hr>
    </div>

    <div class="social-text">
        Continue with Social Network
    </div>

    <div class="social-icons">
        <a href="#">
            <img src="{{ asset('assets/ic_google.png') }}" alt="Google">
        </a>
        <a href="#">
            <img src="{{ asset('assets/ic_facebook.webp') }}" alt="Facebook">
        </a>
    </div>

</div>

<script>
function togglePassword() {
    let input = document.getElementById("password");
    let icon = document.getElementById("eyeIcon");

    if (input.type === "password") {
        input.type = "text";
        icon.setAttribute("stroke", "#7ED957");
    } else {
        input.type = "password";
        icon.setAttribute("stroke", "#808080");
    }
}
</script>

</body>
</html>