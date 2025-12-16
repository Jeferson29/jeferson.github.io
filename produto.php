<?php
$id = $_GET['id'];
$produtos = json_decode(file_get_contents("dados/produtos.json"), true);

foreach ($produtos as $p) {
    if ($p['id'] == $id) {
        $produto = $p;
        break;
    }
}

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $produto['nome'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini Loja</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
     form button {
      background: #008cff;
      color: #FFF;
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 12px;
     }
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

<h1><?= $produto['nome'] ?></h1>
<img src="<?= $produto['imagem'] ?>" style="width:200px">
<p><?= $produto['descricao'] ?></p>
<h3>R$ <?= number_format($produto['preco'], 2, ",", ".") ?></h3>

<form method="post" action="carrinho.php">
    <input type="hidden" name="id" value="<?= $produto['id'] ?>">
    <button type="submit">Adicionar ao carrinho</button>
</form>

</body>
</html>
