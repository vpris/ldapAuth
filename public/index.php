<?php
require_once('../src/authLdap.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/loginScript.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="loginBlock">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="login" method="post" class="loginForm">
                <h1>Ldap Login</h1>
                <input type="text" name="username" id="userLogin" placeholder="Логин вида: rua***">
                <input type="password" name="password" id="userPass1" placeholder="Пароль (как в windows)">
                <button type="submit" name="submit" id="submitButton" onclick="return loginForm()">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>