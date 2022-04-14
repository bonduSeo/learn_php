<?php

function get_conn() {
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");
    return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME);   
    // 포트번호 디폴트값이 아니면 mysqli_connect 함수 5번째 파라미터에 넣어줘야함
}

?>