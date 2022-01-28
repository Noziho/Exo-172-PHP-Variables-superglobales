<?php
session_start();
echo $_SESSION['nom'].'<br>';
echo $_SESSION['prenom'].'<br>';
echo $_SESSION['age'].'<br>';

if (isset($_POST['submit'])) {
    setcookie('password', $_POST['password']);
    setcookie('login', $_POST['username']);
}