<?
if(isset($_COOKIE['uid'])){
    header("Location: /profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Beauty Salon Login</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 8px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .form-group button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #ff69b4;
        color: white;
        font-weight: bold;
        cursor: pointer;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form action="/login_process.php" method="post">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit">Login</button>
        </div>
    </form>
</div>
<div class="register-link">
        <p>Don't have an account? <a href="registration.html">Register</a></p>
    </div>
</body>
</html>
