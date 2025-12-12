<?php
if (isset($_COOKIE['User'])) {
    header("Location: greet.php");
} else {
    header("Location: login.php");
}
exit;
?>
