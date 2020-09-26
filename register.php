<?php include('server.php'); ?>
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
        <h2>Registration</h2>
    </div>

    <form method="post" action="register.php">
        <!-- Display validation of the error -->
        <?php include('errors.php'); ?>
        <div class="input-ground">
            <label>Username</label>
            <input type="text" name="username" value=<?php echo $username; ?>>
        </div>
        <div class="input-ground">
            <label>Email</label>
            <input type="text" name="email" value=<?php echo $email; ?>>
        </div>
        <div class="input-ground">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-ground">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-ground">
            <button type="submit" name="register" class="btn">Registre</button>
        </div>
        <div>
            <p>Allready a member? <a href="login.php">Sign in</a></p>
        </div>
    </form>
</body>
</html>