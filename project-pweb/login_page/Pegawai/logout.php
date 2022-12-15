<?php
session_start();
session_destroy();
header("location: /project-pweb/login_page/");
exit;
?>