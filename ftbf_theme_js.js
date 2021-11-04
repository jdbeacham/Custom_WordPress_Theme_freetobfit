
setTimeout(ftbfPop, 4000);
function ftbfPop() {
    let ftbfScreenPopup = document.getElementById('ftbf-screen-popup');
    ftbfScreenPopup.style.display = "block";

    let ftbfpopupContainer = document.getElementById('ftbf-popup-container');
    ftbfpopupContainer.style.display = "flex";
}

function popX() {

    document.cookie = "popped=yes";

    let ftbfScreenPopup = document.getElementById('ftbf-screen-popup');
    ftbfScreenPopup.style.display = "none";

    let ftbfpopupContainer = document.getElementById('ftbf-popup-container');
    ftbfpopupContainer.style.display = "none";
}

setTimeout(ftbfLogoReturn, 13000);

function ftbfLogoReturn() {
    let ftbfHeaderLogo = document.getElementById('ftbf-header-logo');
    ftbfHeaderLogo.style.position = "fixed";
    ftbfHeaderLogo.style.animationName = "menuFadeIn";
    ftbfHeaderLogo.style.animationDuration = "1s";
}