<?php
session_start();
unset($_SESSION['lid']);
session_destroy();
header("location:index.php?yash=".sha1('yashlabde'));
?>