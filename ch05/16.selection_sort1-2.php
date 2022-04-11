<?php
 //승재씨코드

$arr = array(9,6,7,3,5);    

for($i=0; $i<count($arr);$i++)
{    
    for($z=$i+1;$z<count($arr);$z++)
    {
        if($arr[$i] < $arr[$z])
        { 
            $temp = $arr[$i];
            $arr[$i] = $arr[$z];
            $arr[$z] = $temp;
        }
    }
}
print_r($arr);

print "<br>";

for($i=0; $i<count($arr); $i++)
{
    for($z=$i+1; $z<count($arr)-1; $z++)
        if($arr[$i] > $arr[count($arr)-($z)])
            {
                $temp = $arr[$i];
                $arr[$i] = $arr[count($arr)-($z)];
                $arr[count($arr)-($z)] = $temp;
            }
}

print_r($arr);
print "<br>";

foreach($arr as $sort)
{
    print $sort."<br>";
}

?>