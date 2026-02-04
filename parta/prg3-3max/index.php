<?php
    function largest($x, $y, $z) {
        $max = $x;
        if ($x >= $y && $x >= $z) { 
            $max = $x;
        }
        elseif ($y >= $x && $y >= $z) { 
            $max = $y;
        }
        elseif ($z >= $x && $z >= $y) { 
            $max = $z;
        }
        else {
            $max = 0;
        }   
        echo "Largest number among $x, $y and $z is: $max <br>";
    }

    largest(100, 50, 25);
    largest(50, 75, 60);
    largest(10, 100, 50);
?>