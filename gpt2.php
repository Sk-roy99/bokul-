<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            font-family: Arial, Helvetica, sans-serif;
        }

        .login-box {
            background-color: white;
            width: 350px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        .login-box h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .remember {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .remember input {
            margin-right: 5px;
        }

        button {
            width: 48%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .login-btn {
            background-color: #0072ff;
            color: white;
        }

        .clear-btn {
            background-color: #ccc;
        }

        button:hover {
            opacity: 0.85;
        }

        .links {
            text-align: center;
            margin-top: 20px;
        }

        .links a {
            text-decoration: none;
            color: #0072ff;
            font-size: 14px;
        }

        .links p {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="login-box">
    <h1>User Login</h1>

    <label>Email</label>
    <input type="text" placeholder="Enter your email">

    <label>Password</label>
    <input type="password" placeholder="Enter password">

    <div class="remember">
        <input type="checkbox">
        <label>Remember Me</label>
    </div>

    <div style="display:flex; justify-content: space-between;">
        <button class="login-btn">Login</button>
        <button class="clear-btn">Clear</button>
    </div>

    <div class="links">
        <a href="#">Forgot Password?</a>
        <p>Don't have an account? <a href="#">Register here</a></p>
    </div>
</div>

</body>
</html>
