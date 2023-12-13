<?php
// echo __DIR__;
// session_start();
// var_dump($_SESSION);

?>

<div>
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
</div>