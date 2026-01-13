<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Event Management</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
        }

        header {
            background-color: black;
            color: white;
            text-align: center;
            padding: 20px;
        }

        main {
            padding: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .team {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .member {
            background-color: white;
            width: 250px;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .member h3 {
            margin: 10px 0 5px;
        }

        .member p {
            margin: 5px 0;
            color: #555;
        }

        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }
    </style>
</head>

<body>

<header>
    <h1>About Us</h1>
    <p>Meet our Event Management Team</p>
</header>

<main>
    <h2>Our Team Members</h2>

    <div class="team">

        <div class="member">
            <img src="Aji.jpg" alt="Member Photo">
            <h3>Bokul Bormon</h3>
            <p>Project Leader</p>
            <P>Phn number:62xxxxx</P>
            <p>Email: bokul@example.com</p>
        </div>

        <div class="member">
            <img src="Manab.jpg" alt="Member Photo">
            <h3>Manab Roy</h3>
            <p>Backend Developer</p>
            <P>Phn number:62xxxxx</P>
            <p>Email: rahul@example.com</p>
        </div>

        <div class="member">
            <img src="none.jpg" alt="Member Photo">
            <h3>Unknown</h3>
            <p>Frontend Designer</p>
            <P>Phn number:62xxxxx</P>
            <p>Email: anjali@example.com</p>
        </div>

        <div class="member">
            <img src="none.jpg" alt="Member Photo">
            <h3>Unknown</h3>
            <p>Database Manager</p>
            <P>Phn number:62xxxxx</P>
            <p>Email: neha@example.com</p>
        </div>

    </div>
</main>

<footer>
    &copy; 2026 Event Management System. All Rights Reserved.
</footer>

</body>
</html>
