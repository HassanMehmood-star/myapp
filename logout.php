<?php
session_start();
session_unset();        // Clear session variables
session_destroy();      // Destroy session

header("Location: login.php");
exit();
