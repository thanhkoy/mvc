<?php
$a = 1;

switch ($a){
    case 1:
        $a = $a + 1;
        break;
    default:
        $a = $a + 2;
}

echo "ket qua la: " . $a;
?>