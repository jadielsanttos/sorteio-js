// initial data
let number = document.querySelector('.span-number');
let GetNumber = number.innerText;

if(GetNumber > 100) {
    document.querySelector('.span-number').style.width = '80px';
}

// events
document.querySelector('.NewRaffleNumber').addEventListener('click', NewSorteio);

// functions
function NewSorteio() {
    window.location.reload();
}

function Loading() {
    document.querySelector('.resultado').innerHTML = 'Carregando...';
}

function ShowResult() {
    document.querySelector('.resultado').style.display = 'flex';
}

function MenuOpenerMobile() {
    let MenuMobile = document.getElementById('menu-mobile');

    if(MenuMobile.style.display == 'block') {
        MenuMobile.style.display = 'none';
    }else {
        MenuMobile.style.display = 'block';
    }
}

function ModalOpener() {
    let ModalShow = document.querySelector('.modal-rules');
    let FadeShow = document.querySelector('.fade');

    if(ModalShow.style.display == 'flex' && FadeShow.style.display == 'block') {
        ModalShow.style.display = 'none';
        FadeShow.style.display = 'none';
    }else {
        ModalShow.style.display = 'flex';
        FadeShow.style.display = 'block';
    }
}






