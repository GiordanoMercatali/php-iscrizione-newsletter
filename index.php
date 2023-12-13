<?php

    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <title>Document</title>
</head>
<body>
    <div class="wrapper w-50 mx-auto mt-5 mb-0">
        <form class="d-flex gap-2 mb-5" action="index.php" method="POST">
            <input type="email" name="email-address" class="form-control" placeholder="your@email.com">
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>

        <!-- <div class="alert alert-primary" role="alert">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam voluptatem officiis quia labore, provident harum expedita temporibus totam iure eius minima! Accusantium officia repellendus omnis fuga ex dignissimos laboriosam atque!</div>
        <div class="alert alert-warning" role="alert">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam voluptatem officiis quia labore, provident harum expedita temporibus totam iure eius minima! Accusantium officia repellendus omnis fuga ex dignissimos laboriosam atque!</div>
        <div class="alert alert-danger" role="alert">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam voluptatem officiis quia labore, provident harum expedita temporibus totam iure eius minima! Accusantium officia repellendus omnis fuga ex dignissimos laboriosam atque!</div> -->

        <?php
            require __DIR__ . "/function.php";
        ?>
    </div>

    

</body>
</html>