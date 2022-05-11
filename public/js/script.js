AOS.init();

$(document).ready(function() {
    $('#__btnBukaUndangan').attr('disabled', false);
});

const scrollToTop = () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

const backToTop = () => {
    scrollToTop();

    setTimeout(()=> {
        closeInvitation();
    }, 1000);

    setTimeout(()=> {
        window.location.reload();
    }, 2000);
};

const openInvitation = () => {
    scrollToTop();
    backSongIsReady();

    setTimeout(() => {
        document.getElementById('__coverInvitation').classList.add('modal-hide');
        document.getElementsByTagName('body')[0].classList.remove('modal-open');

        playMusic();
    }, 500);
}

const closeInvitation = () => {
    document.getElementById('__coverInvitation').classList.remove('modal-hide');
    document.getElementsByTagName('body')[0].classList.add('modal-open');
}

window.addEventListener('load', function () {
    Lightense('img.available-to-zoom');
}, false);


$('#__btnModalDompetDigital').click(function() {
    $('#__modalDompetDigital').modalize('show');
});

$('#__btnCloseModalDompetDigital').click(function() {
    $('#__modalDompetDigital').modalize('hide');
});


$('#__btnModalPengirimanKado').click(function() {
    $('#__modalPengirimanKado').modalize('show');
});

$('#__btnCloseModalPengirimanKado').click(function() {
    $('#__modalPengirimanKado').modalize('hide');
});
