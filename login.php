<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="login.php">
        <div class="input-ground">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-ground">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-ground">
            <button type="submit" name="Login" class="btn">Login</button>
        </div>
        <div>
            <p>Not yet a member? <a href="register.php">Sign up</a></p>
        </div>
    </form>
</body>
</html>