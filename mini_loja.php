<?php
$produtos = json_decode(file_get_contents("assets/dados/produtos.json"), true);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini Loja</title>
    <link rel="stylesheet" href="assets/styles/style.css">
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

<h1>Mini Loja Virtual</h1>

<div class="produtos">
<?php foreach ($produtos as $p): ?>
    <div class="item">
        <img src="<?= $p['imagem'] ?>" alt="">
        <h3><?= $p['nome'] ?></h3>
        <p>R$ <?= number_format($p['preco'], 2, ",", ".") ?></p>
        <a href="produto.php?id=<?= $p['id'] ?>">Ver produto</a>
    </div>
<?php endforeach; ?>
</div>

</body>
</html>