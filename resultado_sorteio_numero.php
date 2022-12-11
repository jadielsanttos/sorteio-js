<?php 

if(isset($_POST['raffle'])) {
    $n1 = filter_input(INPUT_POST, 'n1');
    $n2 = filter_input(INPUT_POST, 'n2');

    if($n1 && $n2) {
        $result = rand($n1, $n2);
        $list = $result;
    }else {
        echo "<script>alert('Preencha todos os campos!')</script>";
        echo "<script>window.location.href = 'sorteio_numero.php'</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/numero.css">
    <title>Resultado do sorteio - número</title>
</head>
<body>

    <?php require 'partials/menu.php'; ?>

    <div class="resultado">
        <h3 id="teste">Número sorteado foi:</h3>
        <span class="span-number"><?php echo $list;?></span>
        <button class="NewRaffleNumber">Novo sorteio</button>
        <a href="index.php" class="link-number-voltar">Voltar</a>
    </div>


    <?php require 'partials/footer.php'; ?>

    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/e3dc242dae.js" crossorigin="anonymous"></script>
</body>
</html>