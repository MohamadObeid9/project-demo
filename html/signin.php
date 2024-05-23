<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/signin.css">
</head>
<body>
<?php include('header.php');?>
<div class="container">
    <span class="title">Sign In</span>
    <span>Sign in to access your account</span>
    <form action="#">
            <label for="email"> Email address
                <input type="text" name="email" value="email@gmail.com">
            </label>
            <label for="pass"> password
                <input type="text" name="pass" value="your pasword">
            </label>
    </form>
</div>
<?php include('footer.php');?>
</body>
</html>