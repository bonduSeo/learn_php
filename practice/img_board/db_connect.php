<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB", "board1");
    define("PORT", "3306");

    function get_conn() {
       return mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DB, PORT);
    }