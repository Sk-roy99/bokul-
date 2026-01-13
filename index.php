<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        header {
            background-color: black;
            color: white;
            text-align: center;
            padding: 20px;
        }

        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            background-color: aqua;
            padding: 20px;
        }

        .event {
            background-color: white;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>
    <header>
        <br>
        <h1>❤️ Event Management Website ❤️</h1>
        <p>Plan and organize event</p>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="#">Events</a>
        <a href="About.php">About US</a>
        <a href="#">Contact US</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </nav>
    <main>
        <h2>Upcoming Events</h2>
        <div class ="event">
            <h3>Annual Teh Event 2026</h3>
            <ul>
                <li>Date: 26 Feb 2026</li>
                <li>Location: SOE, Rk University</li>
            </ul>
        </div>
        <div class="event">
            <h3>Workshop on AI/ML</h3>
            <ul>
                <li>Date: 21 Feb 2026</li>
                <li>Location: SOE, Rk University</li>
            </ul>
        </div>
        <div class="event">
        <h3>Workshop - Laravel</h3>
            <ul>
                <li>Date: 26 Feb 2026</li>
                <li>Location: SOE, Rk University</li>
            </ul>
        </div>
    </main>
    <footer>
            @copy; 2026 Event Management System. All Rights Reseved.
    </footer>
</body>
</html>