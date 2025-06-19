<?php
session_start();
session_unset();
session_destroy();
setcookie("user", "", time() - 3600); // Optional: clear cookie too
header("Location: ../index.php");
exit;