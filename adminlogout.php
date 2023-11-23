<?php
session_start();
if(isset($_SESSION['username']))
{
session_destroy();
unset($_SESSION['username']);
echo '<script>alert("You are logged out...");</script>';
echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/index.php"/>';
}
?>