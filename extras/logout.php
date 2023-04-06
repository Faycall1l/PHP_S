<?php

session_start();

session_destroy(); //we destroy the user's session
header('Location: /PHP_S/13_session.php'); // header used to redireecting
