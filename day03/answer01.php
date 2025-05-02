<h2>01</h2>
<?php
    
    function triangle_area($width,$height) {
        return ($width*$height)/2;
    }
    echo "10,20 삼각형의 넓이는 ".triangle_area(10,20);
?>
<hr>
<h2>02</h2>
<?php
    
    function sum($start,$end) {
        $sum=0;
        for($i=$start;$i<=$end;$i++) {
            $sum+=$i;
        }
        return $sum;
    }
    echo "1,10 의 합은 ".sum(1,10);
?>
<hr>
<h2>03</h2>
<?php
    function baesu_sum($num) {
        $sum=0;
        for($i=1;$i<=100;$i++) {
            if($i%$num==0) {
                $sum+=$i;
            }
        }
        return $sum;
    }
    echo "1,100 사이에 5의 배수의 합은 ".baesu_sum(5);
?>
<hr>
