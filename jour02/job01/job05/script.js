var footer = document.getElementById('footer');
var body = document.body


var val = window.scrollY/3500;
var u = val -15

body.onscroll = function() {
    footer.style.backgroundColor = `rgba (${u} ,70, 80, ${window.scrollY/3500})`;
};