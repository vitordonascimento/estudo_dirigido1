<?php

print "Digite a quantidade em dias: \n";

$dias = (int) fgets (STDIN);
$horas = $dias * 24 ;
$minutos = $horas * 60;
$segundos = $minutos * 60 ;

print "O total é de $dias dias, $horas horas, $minutos minutos e $segundos segundos";
