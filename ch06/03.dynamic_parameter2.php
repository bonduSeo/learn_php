<?php
   function multi() {
   print func_get_args()[0]."<br>";
   print func_get_args()[1]."<br>";
   print func_get_args()[2]."<br>";
   print_r(func_get_args());
   }
   function multi2() {
    print func_get_arg(0)."<br>";
    print func_get_arg(1)."<br>";
    print func_get_arg(2)."<br>";
    }
    function multi3() {
        print func_num_args()."<br>";
    }


multi(6,7,8);
print "---<br>";
multi2(4,5,6);
print "---<br>";
multi3(1,24,315,432,12,12,11,2,2,2,2,2,2);

?>

