<?php
print "Digite a temperatura em graus Celcius: ";
$celcius = (float) fgets (STDIN);
$fahrenheit = 9 * $celcius / 5 + 32;
print "$celcius °C equivalem à $fahrenheit °F";
