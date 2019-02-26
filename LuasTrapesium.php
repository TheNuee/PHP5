<?php
echo "<h1>LUAS TRAPESIUM</h1> <br> ";

function cetak_luas($atas, $bawah, $tinggi){
    return ($atas + $bawah)* $tinggi /2; 
}
function cetak_keliling($ab, $bc, $cd, $da){
    return $ab + $bc + $cd + $da; 
}
$a = 12;
$b = 12;
$t = 3;
$ab = 12;
$bc = 15;
$cd = 16;
$da = 12;
echo "<u><b>Luas Trapesium dengan</u></b> $a $b $t /2 = ";
echo cetak_luas($a, $b, $t);
echo "<u><b>Keliling Trapesium dengan</u></b> $ab + $bc + $cd + $da = ";
echo cetak_keliling($ab, $bc, $cd, $da);
?>