<?php
print "Digite seu salário:";
$salario_inicial = (float) fgets (STDIN);
print " Digite a porcentagem de aumento:";
$porcentagem_de_aumento = (float) fgets (STDIN);
$valor_aumento = $salario_inicial * ($porcentagem_de_aumento / 100);
$novo_salario  = $salario_inicial + $valor_aumento;
print "Com o aumento de $porcentagem_de_aumento%, o salário de R$ $salario_inicial passará a ser: R$ $novo_salario";