<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['carrinho'][] = $_POST['id'];
}

$produtos = json_decode(file_get_contents("assets/dados/produtos.json"), true);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini Loja</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <style>
     .btn {
      text-decoration: none;
      color: #FFF;
      background: #008cff;
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 12px;

    </style>
</head>
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

<h1>Seu Carrinho</h1>

<ul>
<?php
$total = 0;

foreach ($_SESSION['carrinho'] as $id) {
    foreach ($produtos as $p) {
        if ($p['id'] == $id) {
            echo "<li>{$p['nome']} - R$ {$p['preco']}</li>";
            $total += $p['preco'];
        }
    }
}
?>
</ul>

<h2>Total: R$ <?= number_format($total, 2, ",", ".") ?></h2>

<a class="btn" href="finalizar.php">Finalizar Compra</a>

</body>
</html>