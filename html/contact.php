<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/contact.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include('header.php');?>
    <div class="container">
        <span class="title">Contact Us</span>
        <span>Fill up the form below to send us a message .</span>
        <form action="#" method="get">
            <label for="name"> FUll name
                <input type="text" name="name" value="mo">
            </label>
            <label for="email"> Email address
                <input type="text" name="email" value="email@gmail.com">
            </label>
            <label for="phone"> FUll name
                <input type="tel" name="phone">
            </label>
            <label for="message">Your message
                <textarea name="message" value="Your message"></textarea>
            </label>
            <input type="submit" value="submit">
        </form>
    </div>
    <?php include('footer.php');?>
</body>
</html>
