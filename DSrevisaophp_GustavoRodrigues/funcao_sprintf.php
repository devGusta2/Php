<?php
// % especifica um formato
//01 ou 1  é o numero minimo de digitos da parte inteiro
//2 significa quantas casas queremos
//f sinigifica que estamos formatando um numero

$meuDimDim = 0.65;
$meuOutroDimDim = 1.56;

$totalMeuDimDim = $meuDimDim + $meuOutroDimDim;
echo "<h3>Meu dimdim:</h3>";
echo $totalMeuDimDim;
echo "<br>";
echo "<h3>Meu dimdim formatado:</h3>";
echo sprintf("%1.3f", $totalMeuDimDim);
?>