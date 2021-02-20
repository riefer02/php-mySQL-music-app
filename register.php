<?php
include('includes/config.php');
include('includes/classes/Account.php');
include('includes/classes/Constants.php');

$account = new Account($con);
include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}
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
                <?php echo $account->getError(Constants::$loginFailed); ?>
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
                <?php echo $account->getError(Constants::$usernameCharacters); ?>
                <?php echo $account->getError(Constants::$usernameTaken); ?>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="e.g. riefer02"
                    value="<?php getInputValue('username') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <label for="firstName">First Name</label>
                <input id="firstName" name="firstName" type="text" placeholder="Andrew"
                    value="<?php getInputValue('firstName') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                <label for="lastName">Last Name</label>
                <input id="lastName" name="lastName" type="text" placeholder="Rief"
                    value="<?php getInputValue('lastName') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$emailInvalid); ?>
                <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                <?php echo $account->getError(Constants::$emailTaken); ?>

                <label for="email">Email</label>
                <input id="email" name="email" type="email" placeholder="e.g. andrew@rief.com"
                    value="<?php getInputValue('email') ?>" required>
            </p>
            <p>
                <label for="confirmEmail">Confirm Email</label>
                <input id="confirmEmail" name="confirmEmail" type="email" placeholder="e.g. andrew@rief.com"
                    value="<?php getInputValue('confirmEmail') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$passwordCharacters); ?>
                <?php echo $account->getError(Constants::$passwordNotAlphaNumeric); ?>
                <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>

                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder=""
                    value="<?php getInputValue('password') ?>" required>
            </p>
            <p>
                <label for="confirmPassword">Confirm Password</label>
                <input id="confirmPassword" name="confirmPassword" type="password" placeholder=""
                    value="<?php getInputValue('confirmPassword') ?>" required>
            </p>
            <button type="submit" name="registerButton">Register</button>

        </form>
    </div>
</body>

</html>