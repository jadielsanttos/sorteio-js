<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/nome.css">
    <title>Sorteio de nomes</title>
</head>
<body>

    <?php require 'partials/menu.php'; ?>

    <div class="add-nomes">
        <h2>Sorteio de nomes</h3>
        <form method="post" action="resultado_sorteio_nome.php">
            <textarea name="nomes" cols="30" rows="10" placeholder="Digite os nomes da sua lista sem espaço e separados por vírgula..." required></textarea>
            <input type="submit" class="raffle" value="Sortear" name="raffle">
        </form>
        <a href="index.php" class="link-voltar">Página inicial</a>
    </div>

    <div class="obs-name">
        <p>caso não siga as regras, não será possível realizar o sorteio.</p>
    </div>

    <?php require 'partials/footer.php'; ?>

    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/e3dc242dae.js" crossorigin="anonymous"></script>
</body>
</html>