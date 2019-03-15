<?php 

print "Digite um valor em metros: \n";

$metros = (int) fgets (STDIN);

print "O valor em metros é $metros \n";

$mm = $metros * 1000;

print "O valor convertido em milímetros é $mm";  