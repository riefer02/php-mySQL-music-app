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
    </div>
</body>

</html>