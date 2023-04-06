<?php

session_start();

if(isset($_SESSION['username'])){
    echo '<h1> Welcome' . $_SESSION['username'] . '</h1>';
    echo '<a href="logout.php">Logout</a>';
}else{
    echo 'Hello guest';
    echo '<a href="/PHP_S/13_session.php">Home</a>';
}
