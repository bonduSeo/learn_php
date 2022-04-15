<?php

    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB_NAME", "board1");
    define("PORT", "3306");


    function get_conn() {
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME, PORT);   
    // 포트번호 디폴트값이 아니면 mysqli_connect 함수 5번째 파라미터에 넣어줘야함
        // 추가함. 디폴드값이라면 저걸 빼도됨
}



//php문법만 있을땐 끝에 안닫아주는게 좋다?! 검색 ㄱ
