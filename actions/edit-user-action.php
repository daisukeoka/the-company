<?php
    include "../classes/User.php";

    # I stantiate an object
    $user = new User;

    # calling the method
    $user->update($_POST, $_FILES);
?>