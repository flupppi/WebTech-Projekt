function showAnswer(id) {
    let x = document.getElementById(id);
    if (x.className.indexOf("w3-show") === -1) {
        x.className += " w3-show";
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace("w3-light-grey", "w3-dark-grey");
    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace("w3-dark-grey", "w3-light-grey");
    }
}

function questionSwitch(clName) {
    const kundenkonto = document.getElementsByClassName("Kundenkonto");
    const bestellung = document.getElementsByClassName("Bestellung");
    const bezahlung = document.getElementsByClassName("Bezahlung");
    const versand = document.getElementsByClassName("Versand");
    const lieferung = document.getElementsByClassName("Lieferung");


    for (let i = 0; i < versand.length; i++) {
        if (kundenkonto[i].className.indexOf("w3-show") === -1) {

        } else {
            kundenkonto[i].className = kundenkonto[i].className.replace(" w3-show", "");
        }
    }
    for (let i = 0; i < bestellung.length; i++) {
        if (bestellung[i].className.indexOf("w3-show") === -1) {

        } else {
            bestellung[i].className = bestellung[i].className.replace(" w3-show", "");
        }
    }
    for (let i = 0; i < bezahlung.length; i++) {
        if (bezahlung[i].className.indexOf("w3-show") === -1) {


        } else {
            bezahlung[i].className = bezahlung[i].className.replace(" w3-show", "");
        }
    }
    for (let i = 0; i < bestellung.length; i++) {
        if (versand[i].className.indexOf("w3-show") === -1) {

        } else {
            versand[i].className = versand[i].className.replace(" w3-show", "");
        }
    }
    for (let i = 0; i < bezahlung.length; i++) {
        if (lieferung[i].className.indexOf("w3-show") === -1) {


        } else {
            lieferung[i].className = lieferung[i].className.replace(" w3-show", "");
        }
    }

    const x = document.getElementsByClassName(clName);

    let i;
    for (i = 0; i < x.length; i++) {
        if (x[i].className.indexOf("w3-show") === -1) {

            x[i].className += " w3-show"

        } else {
            x[i].className = x[i].className.replace(" w3-show", "");
        }
    }
}

