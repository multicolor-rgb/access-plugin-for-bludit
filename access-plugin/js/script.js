const accept = document.querySelector('.acceptalert');
const decide = document.querySelector('.decidealert');
const alert = document.querySelector('.alert');


const alertColor = alert.getAttribute('data-color');
const alertBackground = alert.getAttribute('data-background');

//style
alert.style.color = alertColor;
alert.style.background = alertBackground;
//end style

alert.addEventListener('contextmenu', event => event.preventDefault());




accept.addEventListener('click', () => {

    alert
        .classList
        .add('fadeout');

    setTimeout(() => {
        alert.remove();
    }, 1000)

    localStorage.setItem("acceptInfo", "yes");



});


decide.addEventListener('click', () => {

    history.back();

    if (history.back() == null) {
        window.location = "https://google.com/";
    }

})