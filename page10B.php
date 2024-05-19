<?php
session_start();
session_unset();
session_destroy();

unset($_COOKIE['username']);
unset($_COOKIE['password']);

header("Location: page10A.php");
exit;
