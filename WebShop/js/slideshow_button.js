let slideIndex = 1;
showDivsMobile(slideIndex);

function plusDivs(n) {
    showDivsMobile(slideIndex += n);
}

function currentDivMobile(n) {
    showDivsMobile(slideIndex = n);
}

function showDivsMobile(n) {
    let i;
    const x = document.getElementsByClassName("mySlidesMobile");
    const dots = document.getElementsByClassName("demoMobile");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-white", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " w3-white";
}
