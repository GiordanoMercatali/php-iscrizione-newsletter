<?php

    session_start();

    // if (isset($_POST['otp'])) {
    //     $code = $_POST['otp'];
    //     if ($code == OTP_CODE) {
    //         $_SESSION['auth'] = true;
    //         header('Location: ./dashboard.php');
    //     } else {
    //         echo 'ERROREEEE!';
    //         $_SESSION['attempts']++;

    //         if ($_SESSION['attempts'] >= 3) {
    //             $_SESSION['freeze'] = time();
    //             header('Location: ./freeze.php');
    //             die;
    //         }
    //     }

    //     var_dump($_SESSION['attempts']);
    // }
?>


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
        require __DIR__ . "/function.php";
    ?>

    

</body>
</html>