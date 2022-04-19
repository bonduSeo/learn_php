<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "506greendg@");
    define("DB", "employees");
    define("PORT", "3306");

    function get_conn() {
       return mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DB, PORT);
    }
    $sql = 
    "
        SELECT emp_no, first_name,last_name, gender
        FROM employees
    ";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    
    print_r($result);
    print "<br>";


    while ($row = mysqli_fetch_assoc($result) ) {
        $first_name = $row["first_name"];
        $gender = $row["gender"];
        print $first_name." ";
        print $gender;
        print "<br>";
    }
    
    print_r($result);
    print "<br>";
    
    mysqli_close($conn);


    print_r($result);
    print "<br>";

    mysqli_free_result($result);

    print_r($result);
    print "<br>";
    
?>
