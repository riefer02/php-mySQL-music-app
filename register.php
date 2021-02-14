<?php
include('includes/classes/Account.php');
$account = new Account();
include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");
?>

<html>

<head>
    <title>Plabak</title>
</head>

<body>
    <div id="inputContainer" class="">
        <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. riefer02" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="" required>
            </p>
            <button type="submit" name="loginButton">Login</button>

        </form>

        <form id="registerForm" action="register.php" method="POST">
            <h2>Create a free account</h2>
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. riefer02" required>
            </p>
            <p>
                <label for="firstName">First Name</label>
                <input id="firstName" name="firstName" type="text" placeholder="Andrew" required>
            </p>
            <p>
                <label for="lastName">Last Name</label>
                <input id="lastName" name="lastName" type="text" placeholder="Rief" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="e.g. andrew@rief.com" required>
            </p>
            <p>
                <label for="confirmEmail">Confirm Email</label>
                <input id="confirmEmail" name="confirmEmail" type="email" placeholder="e.g. andrew@rief.com" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="" required>
            </p>
            <p>
                <label for="confirmPassword">Confirm Password</label>
                <input id="confirmPassword" name="confirmPassword" type="password" placeholder="" required>
            </p>
            <button type="submit" name="registerButton">Register</button>

        </form>
    </div>
</body>

</html>