<?php
/**
 * ejemplo                         simbolo                            resultado
 * 1=="1"                          ==(igual)                          TRUE
 * 10=="10"                        ===(identico)                      FALSE
 * 7!="7"                          !=(diferente)                      FALSE
 * 21<>"21"                        <>(diferente)                      FALSE
 * 19!=="21"                       !==(no identico)                   TRUE
 * 7 < 4                           <(menor que)                       FALSE
 * 7 > 4                           >(mayor que)                       TRUE
 * 2 <= 2                           <=(menor o igual que)             TRUE
 * 3 <= 7                           <=(mayor o igual que)             FALSE
 */

var_dump(2 == "2");
echo "<br>";
var_dump(2 == "2");
echo "<br>";
var_dump(2 == "2");
echo "<br>";