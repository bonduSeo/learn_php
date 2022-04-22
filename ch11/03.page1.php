<?php
    session_start();
    $g = "This is Global variable";
    $_SESSION["g"] = "asdf";
?>
<a href="03.page2.php">Next page</a>