function myFunction(id) {
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