<?php
print "Quantos cigarros você fuma por dia?: ";
$cigarros_fumados = (int) fgets (STDIN);
print "Quantos anos faz que você fuma?: ";
$anos_fumados = (float) fgets (STDIN);
$dias_perdidos = ((($cigarros_fumados * 10) /60 ) / 24 ) * ($anos_fumados * 365);
print "Foram perdidos cerca de $dias_perdidos dia(s) de vida por fumar.";