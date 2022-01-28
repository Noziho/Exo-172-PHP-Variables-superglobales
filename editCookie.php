<?php
session_start();
setcookie('login', 'Mon cookie modifié');
if (isset($_COOKIE['login'])){
    echo $_COOKIE['login'];
}
