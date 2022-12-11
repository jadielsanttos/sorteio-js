<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/numero.css">
    <title>Sorteio de números</title>
</head>
<body>

    <?php require 'partials/menu.php'; ?>

    <div class="add-numero">
        <h2>Sorteio de número</h3>
        <form method="post" action="resultado_sorteio_numero.php">
            <label for="N1">Entre</label>
            <input type="number" name="n1" value="1" required>
            <label for="N2">e</label>
            <input type="number" name="n2" value="100" required>
            <input type="submit" class="raffle" value="Sortear" name="raffle">
        </form>
        <a href="index.php" class="link-voltar">Página inicial</a>
    </div>

    <div class="obs-number">
        <p>Escolha o menor e o maior número<br>
        Exemplo: 1 e 10.</p>
    </div>

   
    <?php require 'partials/footer.php'; ?>
    
    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/e3dc242dae.js" crossorigin="anonymous"></script>
</body>
</html>