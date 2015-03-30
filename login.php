<?php
    include(__DIR__."/conf.php");
    include(__DIR__."/layout/main.php");

    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Project root</title>
</head>
<body>
No account?  <a href="register.php">Register here</a>.

<h1>Log in</h1>

<form action="login.php" method="POST">
Username: <input type="text" name="username" /><br />
Password: <input type="password" name="password" /><br />
</form>
</body>
</html>
