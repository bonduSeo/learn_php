<?php
    session_start();
    $_SESSION['var1'] = "v1";
    $_SESSION['var2'] = "v2";

    echo $_SESSION['var1'],"<br>";
    echo $_SESSION['var2'],"<br>";

    ?>

    <a href="05.register-2.php">gogo</a>
    <a href="05.register-destroy.php">destroy</a>
    <a href="05.register-unset.php">unset</a>