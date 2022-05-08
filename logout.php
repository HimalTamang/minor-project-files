<?php
    session_start();
    session_destroy();
    header('location: ../api/profile.php');

?>