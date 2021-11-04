function popClass(event) {
    if (event.target.className == "ftbf-vc-button") {
    let whatToPop = event.target.nextElementSibling;
    whatToPop.style.display = "block";
    }
    if (event.target.className == "ftbf-vc-button-title" || event.target.className == "ftbf-vc-button-day" ||
    event.target.className == "ftbf-vc-button-time" || event.target.className == "ftbf-vc-click-details" ) {
        let whatToPopTwo = event.target.parentNode.nextElementSibling;
    whatToPopTwo.style.display = "block";
    }
    }

    function unPopClass(event) {
        if (event.target.className == "ftbf-vc-button") {
        let whatToPop = event.target.nextElementSibling;
        whatToPop.style.display = "none";
        }
        }
    
    window.addEventListener('load', ftbfVcButtonContainer )
    
    function ftbfVcButtonContainer() {
    let ftbfVcButtonContainer = document.getElementById('ftbf-vc-button-container');
    ftbfVcButtonContainer.addEventListener('click' , popClass);
    }