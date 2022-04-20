<?php
    session_start();
    $_SESSION['G'] = "this is a global variable";

    echo $_SESSION['G'];
?>

<a href="./page4.php">asdf</a>
<form action="page4.php" method="post" >
    <input type="text" name="text1" >
    <input type="submit" value="입력">
</form>