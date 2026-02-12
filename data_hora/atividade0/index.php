<?php
date_default_timezone_set('America/Sao_Paulo');
echo "Data atual ".date("Y-m-d")."<br>";
echo "hora atual ".date("H:i:s")."<br>";
echo "hora  e data atual ".date("Y-m-d H:i:s")."<br>";
echo "<hr>";
//formataçao de data para visualizar corretamente
$data = "2026-02-10";
$data_formatada = date("d/m/Y", strtotime($data));
echo "Data formatada: ".$data_formatada;
echo "<hr>";
//calculos matemáticos
$nova_data = date("Y-m-d",strtotime($data."+ 3 month"));
echo "Data de hoje mais um dia: ".$nova_data;
echo "<hr>";
//subtraçao entre 2 datas
$data1 = "2026-02-10";
$data2 = "2000-02-10";
$diferenca = strtotime($data1) -  strtotime($data2);
$dias = floor($diferenca/(60*60*24));
echo"A diferença em dias: ".$dias."<br>";
echo "<hr>";
//retorna a data atual em segundos
echo time();
echo "<hr>";


?>