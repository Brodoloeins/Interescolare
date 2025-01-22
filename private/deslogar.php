<?php

    session_start();
    session_destroy();
    header("location: ../");
    $token = md5(session_id());
    exit();

?>