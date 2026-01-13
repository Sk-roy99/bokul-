<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            color: white;
            background-color: gray;
        }

    </style>
</head>
<body>
    <h3>User Registration</h3>
    <form action="regprocess.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            <label for="fname">
                FullName
            </label>
            <input type="text" name="fname" id="fname" requried><br><br>
            <label for="lname">LastName</label>
            <input type="text" name="fname" id='fname' requried><br><br>
            <label for="date">Date of Birth</label>
            <input type="date"><br><br>
            <label for="country">Nationality</labe>
            <select name="country" id="country">
                <option value="Bangladesh">Bangladersh</option>
                <option value="India">India</option>
                <option value="Nepal">Nepal</option>
            </select><br><br>
            <label for="password">Password</label>
            <input type="password"><br><br>
            <label for="password">Confirm Password</label>
            <input type="password"><br><br>
            <button>Submit</button>
            
        </fieldset>
    </form>
</body>
</html>