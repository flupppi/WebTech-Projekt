

function showLogin(loginID){
    let signup = document.getElementById('signup')
    let cart = document.getElementById('cart');
        if (signup.className.indexOf("w3-show") === -1) {

        } else {
            signup.className = versand[i].className.replace(" w3-show", "");
        }

        if (cart.className.indexOf("w3-show") === -1) {

        } else {
            cart.className = cart.className.replace(" w3-show", "");
        }

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
    let login = document.getElementById('login');
    let cart =  document.getElementById('cart');

    if (login.className.indexOf("w3-show") === -1) {

    } else {
        login.className = login.className.replace(" w3-show", "");
    }

    if (cart.className.indexOf("w3-show") === -1) {

    } else {
        cart.className = cart.className.replace(" w3-show", "");
    }

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
    let signup = document.getElementById('signup');
    let login = document.getElementById('login')

    if (signup.className.indexOf("w3-show") === -1) {

    } else {
        signup.className = signup.className.replace(" w3-show", "");
    }

    if (login.className.indexOf("w3-show") === -1) {

    } else {
        login.className = login.className.replace(" w3-show", "");
    }

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
