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

        
    }
?>