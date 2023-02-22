<?php 

$names = filter_input(INPUT_POST, 'nomes');
$FinalList = explode(",", $names); 

if($names) {
    $quantidade = count($FinalList);
    $raffle = rand(0, $quantidade - 1);
}else {
    echo "<script>alert('Preencha o campo abaixo!')</script>";
    echo "<script>window.location.href = 'sorteio_nome.php'</script>";
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/nome.css">
    <title>Resultado do sorteio - nome</title>
</head>
<body>

    <?php require 'partials/menu.php'; ?>

    <div class="area-countdown">
        <h2>Sorteando...</h2>
        <h3 class="countdown">5</h3>
    </div>

    <div class="resultado">
        <h3 id="teste">Nome sorteado foi:</h3>
        <?php 

        foreach($FinalList as $keys => $dados) {
            if($raffle === $keys) {

                if(strlen($dados) > 12) { // verificando se o usuario digitou algum nome com mais de 12 caracteres
                    echo "<script>alert('Sua lista contém algum nome com mais de 12 caracteres, tente novamente.')</script>";
                    echo "<script>window.location.href = 'sorteio_nome.php'</script>";

                }elseif(strstr($dados, " ")) { // evitando espaços em branco
                    echo "<script>alert('Sua lista contém espaços em branco!')</script>";
                    echo "<script>window.location.href = 'sorteio_nome.php'</script>";
                }else {
                    echo '<span class="Nome">'.$dados.'</span>';
                }
                
            }
        }

        ?>
        <button class="NewRaffle" onclick="NewSorteio()">Novo sorteio</button>
        <a href="index.php" class="link-nome-voltar">Voltar</a>
    </div>

    <?php require 'partials/footer.php'; ?>

    <script>
        let CountValue = document.querySelector('.countdown').innerHTML;

        const CountDown = setInterval(function() {
            CountValue--;
            document.querySelector('.countdown').innerHTML = CountValue;

            if(CountValue == 0) {
                clearInterval(CountDown);

                document.querySelector('.area-countdown').style.display = 'none';
                document.querySelector('.resultado').style.display = 'flex';
            }

        }, 1000);

    </script>

    <script src="assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/e3dc242dae.js" crossorigin="anonymous"></script>
</body>
</html>