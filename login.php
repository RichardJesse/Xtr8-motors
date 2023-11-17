<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="navigation.css">
    <link rel="stylesheet" href="general.css">
</head>
<body>
<div class="navigation_container">
    <div class="left_container">
        <div class="logo">
            <h2>XLR8 MOTORS</h2>
        </div>
    </div>
    <div class="right_container">
        <a href="registration.html">Signup</a>
        <a href="login.html" class="active">Login</a>
        <a href="">About</a>
    </div>
</div>
<div class="signup">
    <div class="heading">
        <h2>XLR8 Motors Login</h2>
    </div>
    <div class="sign-details">
        <form action>
            <div class="input-username">
                <input class="username" type="text" placeholder="Username" required>
                <div class="usererror"></div>
            </div>
            <div class="input-password">
                <input class="pass-word" type="password" placeholder="Password" required>
                <div class="passworderror"></div>
            </div>
            <div class="">
                <select name="accounttype" id="account" required>
                    <option value="admin">Admin</option>
                    <option value="user">Normal user</option>
                </select>
            </div>
            <div class="sign-up-button">
                <input type="submit" id="button" value="Login" class="button">
            </div>
        </form>
        <div class="link">
            Don't have an account? <a href="registration.html">Signup</a>
        </div>
    </div>

      <script src="login.js">
        
      </script>
</div>
</body>
</html>