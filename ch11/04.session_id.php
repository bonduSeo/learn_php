<?php

    session_start();
    echo "Session ID: ", session_id()."<br>";
    $_SESSION["aa"] = "abc";
   print session_save_path();

   phpinfo();

   // ?????