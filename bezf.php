<?
function bezier($p,$steps){
    $t = 1 / $steps;
    $temp = $t * $t;
    $ret = array();
    $f = $p[0];
    $fd = 3 * ($p[1] - $p[0]) * $t;
    $fdd_per_2=3*($p[0]-2*$p[1]+$p[2])*$temp;
    $fddd_per_2=3*(3*($p[1]-$p[2])+$p[3]-$p[0])*$temp*$t;
    $fddd = $fddd_per_2 + $fddd_per_2;
    $fdd = $fdd_per_2 + $fdd_per_2;
    $fddd_per_6 = $fddd_per_2 * (1.0 / 3);
    for ($loop=0; $loop<$steps; $loop++) {
        array_push($ret,$f);
        $f = $f + $fd + $fdd_per_2 + $fddd_per_6;
        $fd = $fd + $fdd + $fddd_per_2;
        $fdd = $fdd + $fddd;
        $fdd_per_2 = $fdd_per_2 + $fddd_per_2;
    }
    return $ret;
} 
?>
