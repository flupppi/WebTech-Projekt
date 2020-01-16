

function showLogin(loginID){

        let x = document.getElementById(loginID);
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

function showSignup(signupID){

    let x = document.getElementById(signupID);
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

function showCart(cartID){

    let x = document.getElementById(cartID);
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


function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
