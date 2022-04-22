<?php
    setcookie("country", "Korea");
    echo "Contry: ", $_COOKIE['country'],"<br>";
    //쿠키는 셋쿠키로 넣자마자 바로 출력안됨(새로고침이나 창이동후 출력가능)
    //첫시도시 에러출력안할려면 if(isset())으로 분기만들어주면됨
?>
<a href="06.cookie2.php">NEXT PAGE </a>