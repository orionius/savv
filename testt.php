

<?

session_start();
echo $_SESSION['user']."<br<br>";
echo $_SESSION['hashses'];
unset($_SESSION['hashses']);
echo $_SESSION['hashses'];
echo $_SESSION['user']."<br<br>";


?>