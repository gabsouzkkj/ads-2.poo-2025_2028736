<?php
function calcularMedia($x1, $x2, $x3) {
    $media = ($x1 + $x2 + $x3) / 3;
    return $media;
}


print "A média Aritmética é: " . calcularMedia(30, 20, 10);
?>