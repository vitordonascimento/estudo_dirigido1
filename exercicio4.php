<?php
print "Digite o valor da mercadoria: ";
$valor_mercadoria = (float) fgets (STDIN);
print "Digite o valor do desconto desconto:";
$desconto = (float) fgets (STDIN);
$valor_desconto = $valor_mercadoria * ($desconto /100);
$valor_final = $valor_mercadoria - $valor_desconto; 
print "o valor final da mercadoria é : $valor_final";