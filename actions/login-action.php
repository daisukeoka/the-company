<?php
    include "../classes/User.php";

    # instantiate an object
    $user = new User;

    # Call the method
    $user->login($_POST);
?>