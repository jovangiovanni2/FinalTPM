<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div>
        <img src="images/Logo hack.png" alt="Logo Hacktaton">
    </div>
    <div>
    <h1>WELCOME BACK</h1>
    </div>
    <div class="container">
        <form>
            <label for="email">Your email</label>
            <input type="email" id="email" name="email" required placeholder="Masukkan email anda...">
            <label for="password">Your password</label>
            <input type="password" id="password" name="password" required placeholder="Masukkan password anda...">
            <div class = "forgot">
                <a href="#">Forget password?</a>
            </div>
            <p></p>
            <div class = button>
                <button type="submit">LOGIN</button>
            </div>
        </form>
        <div class = "Register">
            <a href="signup">Belum memiliki akun? Registrasi disini</a>
        </div>
    </div>
</body>
</html>
