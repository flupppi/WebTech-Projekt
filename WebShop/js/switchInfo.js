function switchInfo(infoID) {
    var baumwolle = document.getElementsByClassName("1");
    var bestellung = document.getElementsByClassName("2");
    var bezahlung = document.getElementsByClassName("3");
    var versand = document.getElementsByClassName("4");
    var lieferung = document.getElementsByClassName("5");
    var plastik = document.getElementsByClassName("6");

    for (let i = 0; i < baumwolle.length; i++) {
        if (baumwolle[i].className.indexOf("w3-show") === -1) {

        } else {
            baumwolle[i].className = baumwolle[i].className.replace(" w3-show", "");
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
    for (let i = 0; i < plastik.length; i++) {
        if (plastik[i].className.indexOf("w3-show") === -1) {


        } else {
            plastik[i].className = plastik[i].className.replace(" w3-show", "");
        }
    }

    var x = document.getElementsByClassName(infoID);

    let i;
    for (i = 0; i < x.length; i++) {
        if (x[i].className.indexOf("w3-show") === -1) {

            x[i].className += " w3-show"

        } else {
            x[i].className = x[i].className.replace(" w3-show", "");
        }
    }

}