<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="email" name="email-address" class="form-control" placeholder="your@email.com">
        <button type="submit">Submit</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $address = $_POST['email-address'];
        if (empty($address)) {
            echo "Insert e-mail address";
        } else if (!str_contains($address, '@') || !str_contains($address, '.')) {
            echo "Insert a valid address";
        } else {
            echo $address;
        }
        }
    ?>

</body>
</html>