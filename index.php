<?php
session_start();
$_SESSION['nom'] = "Decroix";
$_SESSION['prenom'] = "Noah";
$_SESSION['age'] = "19";
echo $_SERVER['REMOTE_ADDR']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
?>
<a href="page2.php">Ma page 2</a><br>
<a href="printcookie.php">PrintCookie</a><br>
<a href="editCookie.php">PrintEditedCookie</a><br>
<form action="page2.php" method="post">
    <label for="id-username">username: </label>
    <input type="text" id="id-username" name="username">

    <label for="id-password">Password:</label>
    <input type="password" name="password" id="id-password">

    <input type="submit" name="submit">
</form>
