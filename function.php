<?php
// echo __DIR__;
// session_start();
// var_dump($_SESSION);

?>

<div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {?>
            <?php $address = $_POST['email-address']; ?>
            <?php if (empty($address)) { ?>
                <p class="alert alert-danger">Insert e-mail address</p>
            <?php } else if (!str_contains($address, '@') || !str_contains($address, '.')) { ?>
                <p class="alert alert-warning">Insert a valid address</p>
            <?php } else { ?>
                <p class="alert alert-primary">Welcome <?php echo $address ?> </p>
                <?php } ?>
            <?php } ?>
    
</div>