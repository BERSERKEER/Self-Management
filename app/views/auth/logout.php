<?php
session_start();
session_destroy();
header("Location: /Self-Management/app/views/auth/login.php");
exit();
