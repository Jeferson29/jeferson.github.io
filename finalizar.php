<?php
session_start();

$produtos = json_decode(file_get_contents("assets/dados/produtos.json"), true);
$pedidos = [];

if (file_exists("assets/dados/pedidos.json")) {
    $pedidos = json_decode(file_get_contents("dados/pedidos.json"), true);
}

$total = 0;
$itens = [];

foreach ($_SESSION['carrinho'] as $id) {
    foreach ($produtos as $p) {
        if ($p['id'] == $id) {
            $itens[] = $p;
            $total += $p['preco'];
        }
    }
}

$novoPedido = [
    "id" => count($pedidos) + 1,
    "itens" => $itens,
    "total" => $total,
    "data" => date("d/m/Y H:i")
];

$pedidos[] = $novoPedido;

file_put_contents("dados/pedidos.json", json_encode($pedidos, JSON_PRETTY_PRINT));

$_SESSION['carrinho'] = [];

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini Loja</title>
    <link rel="stylesheet" href="assets/styles/style.css">
<head>
<body>
   
<header class="topo">
    <div class="logo">Mini Loja</div>

    <nav class="menu">
        <a href="index.php">Home</a>
        <a href="carrinho.php">Carrinho</a>
        <a href="admin.php">Admin</a>
    </nav>
</header>

<div class="espaco-header"></div>

<h1>Pedido finalizado com sucesso!</h1>
<p>Total: R$ <?= number_format($total, 2, ",", ".") ?></p>

</body>
</html>