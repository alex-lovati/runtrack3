var button = document.getElementById('button');
var compteur = document.getElementById('compteur');
console.log(compteur)

function addOne() {
        var nb = compteur.innerHTML;
        nb++;
        compteur.innerHTML = nb;
}
button.addEventListener('click', addOne)