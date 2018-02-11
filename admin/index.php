<?php
include ('login.php');
if (isset($_SESSION['na']))
{
    header("Location:dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/login_admin.css">
    <script src="../js/lib/jquery/jquery-2.1.3.js"></script>
    <link rel="stylesheet" href="../fonts/font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="content">
    <form method="post" name="la">
        <?php
        if(isset($fmsg)){?>
        <div class="wrong">
            <p>Wrong username or password.
            </p>
        </div>
        <?php
        }
        ?>
        <div class="container">
            <label></label>
            <input type="text" name="na" id="na" placeholder="Name">
            <label></label>
                <input type="password" name="pa" id="pa" placeholder="Password">
            <label>
                <input type="submit" id="login" name="login" value="Login">
            </label>
        </div>

    </form>

</div>
</body>
</html>