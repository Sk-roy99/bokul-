<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin; 0;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: pink;
            font-family: Arival, helvetica, sans-serif;
        }
        .login-box{
            background-color: lightgrey;
            width: 350px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
        .login-box h1{
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
        input[type="password"]{
            width: 100px;
            padding: 10px;
            margin-bottom: 15px;
            border-raadius; 5px;
        }

        .remember{
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .remember input{
            margin-right: 5px;
        }

        button{
            width: 48%;
            padding; 10px;
            
        }
        </style>
</head>
<div class="login-box">
    <h1>User Login</h1>


    <br><br><br>
    <Label>Email:</Label><br>
    <input type="text" placeholder="Enter your email">
    <br><br><br>
    <label for="password">Password</label><br>
    <input type="passworrd"  placeholder="Enter password"><br><br>
    <input type="checkbox" value="Remember Me">Remember Me
    <br><br><br>
    <button>Login</button>
    <button>Clear</button>
    <br><br>
    <a href="*">Forget Password?</a><br><br>
    <P>Don't have an account?<a href="*">Register here</a></P>


</div>
<body>

</body>
</html>