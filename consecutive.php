<?php
$n=  array();
$x=100000;
for ($i=1; $i < $x ; $i++) { 
  $n[]=$i;
}
function prime($n,$x){
        $sum = 0;
        $consecutive = 0;
        foreach($n as $k => $v) {
            $counter = 0; 
            for($j = 1; $j <= $v; $j++) { 
                if($v % $j == 0)
                    $counter++;
            }
            if($counter == 2) {
                echo $v.",";
                $sum += $v;
              if($sum < $x){
                $consecutive=$sum;
              }
            }
        }
        echo "<br/>";
        echo "consecutive primes: " . $consecutive;
    }

    prime($n,$x);


?>