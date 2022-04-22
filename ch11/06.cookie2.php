<?php
    setcookie("country","한국");
    echo "Contry: ", $_COOKIE['country'],"<br>";

    $_COOKIE['country'] = "UK";
    echo "Country: ", $_COOKIE['country'],"<br>";

    unset($_COOKIE['country']);
    // echo "Country: ", $_COOKIE['country'],"<br>"; 
    //쿠키변수가 지워질뿐 사용자의 쿠키가 지워지진 않음

    setcookie("country"); //사용자의 쿠키 삭제 
    //크롬개발자창 - 어플리케이션 - 쿠키에서 살펴볼수있음