<?php
session_start();
foreach ($_COOKIE as $key => $value) {
    echo "$key => $value <br>";
}