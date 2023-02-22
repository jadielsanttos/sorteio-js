<header>
    <div class="area-menu">
        <div class="logo">
            <a href="index.php"><img src="assets/images/logo.png" alt=""></a>
        </div>

        <div class="menu">
            <img src="assets/images/menu-drop-down.svg" class="menu-opener" onclick="MenuOpenerMobile()">
            <nav id="menu-mobile">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="li-single" onclick="ModalOpener()">Regras <i class="fa-sharp fa-solid fa-caret-down"></i></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="fade"></div>

<div class="modal-rules">
    <span class="close-modal" onclick="ModalOpener()">fechar</span>
    <div class="item-modal">
        <h3>Sorteio de número</h3>
        <p>Se você tiver uma lista identificada por números
        é só informar o <strong>menor</strong> e o <strong>maior</strong> número.</p>
    </div>

    <div class="item-modal">
        <h3>Sorteio de nomes</h3>
        <p>você vai inserir
        somente o primeiro nome de cada pessoa, <strong>entre um nome e outro separe por vírgula, sem dar espaço</strong>.</p>
    </div>
</div>