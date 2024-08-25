<?php

$nomeProduto = $_POST['txtProduto'];
$descricaoProduto = $_POST['txtDescricao'];
$valorProduto = $_POST['numValor'];
$quantidadeProduto = $_POST['numQtd'];

$valorTotal = $valorProduto * $quantidadeProduto;

if ($valorTotal > 1000) {
    
    $valorDesconto = (10/100) * $valorTotal; 
}

else if ($valorTotal <= 1000) {

    $valorDesconto = (5/100) * $valorTotal;
}

$totalPagar = $valorTotal - $valorDesconto;

echo "<p> Produto: $nomeProduto </P" ;
echo "<p> Descrição: $descricaoProduto </P";
echo "<p> Valor do Produto: $valorProduto </P";
echo "<p> Quantidade do Produto: $quantidadeProduto </P";

echo "<p> Valor Total: $valorTotal </P";
echo "<p> Valor a Pagar: $totalPagar </P";



?>