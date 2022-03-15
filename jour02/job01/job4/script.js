var button = document.getElementById('button');
var compteur = document.getElementById('compteur');
console.log(compteur)

function addOne() {
    var chiffre = compteur.innerHTML;
    chiffre++;
    compteur.innerHTML = chiffre;
}
button.addEventListener('click', addOne)