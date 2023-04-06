<?php
/*
Cookies are a mechanism for storing data in a remote browser and tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
we do not store sensitive data in the cookies
*/
 
//set cookies
setcookie('name', 'Joe', time() + 86400 * 30);

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400); //unsetting a cookie
