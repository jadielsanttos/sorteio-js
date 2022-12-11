<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sorteio JS | Bem-vindo(a)</title>
</head>
<body>

    <?php require 'partials/menu.php'; ?>

    <section class="first-section">
        <div class="content-main">
            <h1>Faça seu sorteio <br>é rápido e prático.</h1>
            <a href="sorteio_numero.php">Sorteio de número</a>
            <a href="sorteio_nome.php" id="link-single">Sorteio de nomes</a>
        </div>
    </section>

    <section class="section" id="regras">
        <div class="section-img"><img src="assets/images/arrow-69.svg" alt=""></div>
        <h2>Como funciona</h2>
        <h3>Entenda</h3>
        <div class="how-itworks">
            <div class="item">
                <h3>Sorteio de número</h3>
                <p>Se você tiver uma lista identificada por números
                é só informar o <strong>menor</strong> e o <strong>maior</strong> número.</p>
            </div>

            <div class="item">
                <h3>Sorteio de nomes</h3>
                <p>você vai inserir
                somente o primeiro nome de cada pessoa, <strong>entre um nome e outro separe por vírgula, sem dar espaço</strong>.</p>
            </div>
        </div>
    </section>

    <?php require 'partials/footer.php';?>

    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/e3dc242dae.js" crossorigin="anonymous"></script>
</body>
</html>