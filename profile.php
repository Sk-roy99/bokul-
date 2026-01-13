<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="color: deepskyblue;">User Profile</h2>
    <h3 style="color: blue;">Personal Details</h3>
    <form action="useraccount.php" method="post">
        <fieldset>
            <legend style="color: chartreuse;">User Login</legend>
            <label for="username">User name:</label>
            <input type="text" name="name" id="name" required><br><br>
            <label for="email">Email:</label>
            <input type="email" name=""><br><br>
            <label for="PhoneNumber">PhoneNumber:</label>
            <input type="number"><br><br>
            <label for="Address">Address:</label>
            <input type="address" ><br><br>
            <label for="password">Password:</label>
            <input type="password"><br><br>
            <label for="Confirm password"> Comfirm Password:</label>
            <input type="password"><br><br>
            <label for="file">Choose File:</label>
            <input type="file" name="file" id="file" multiple><br><br>
            <button type="submit" style="color: brown;">Login</button>
        </fieldset>
        <fieldset>
            <legend style="color:chartreuse;">Aditional Information</legend>
            <label for="country">country</label>
            <select name="country" id="country">
                <option value="Bangladesh" style="color: gold;">Bangladesh</option>
                <option value="India" style="color: gold;">India</option>
                <option value="Nepal" style="color: gold;">Nepal</option>
                <option value="USA" style="color: gold;">USA</option>
            </select><br><br>
            <label for="hobby">Hobby:</label>
            <input type="checkbox" name="hobby" id="1">Cricket
            <input type="checkbox" name="hobby" id="2">Football
            <input type="checkbox" name="hobby" id="3">Vollybal
            <input type="checkbox" name="hobby" id="4">Gymnastic

        </fieldset>
    </form>
</body>
</html>