function showTagged(tag){
    var artikel = document.getElementsByClassName("w3-hide")


    for (let i = 0; i < artikel.length; i++) {
        if (artikel[i].className.indexOf("w3-show") === -1) {

        } else {
            artikel[i].className = artikel[i].className.replace(" w3-show", "");
        }
    }

    var x = document.getElementsByClassName(tag);

    let i;
    for (i = 0; i < x.length; i++) {
        if (x[i].className.indexOf("w3-show") === -1) {

            x[i].className += " w3-show"

        }
    }
}