<?php
print "Digite a distância a ser percorrida (km): ";
$distancia = (float) fgets(STDIN);
print "Digite a velocidade média esperada (km\h): ";
$velocidade_media = (float) fgets (STDIN);
$tempo = $distancia / $velocidade_media;
print "A viagem durará cerca de $tempo hora(s)";