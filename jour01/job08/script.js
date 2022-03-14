function sommenombrespremiers(nb1, nb2) {

    var i = 0;

    for (i; i < nb1; i++) {
        if (nb1 % i == 0) {
            return false;
        }
    }
    for (i; i < nb2; i++) {
        if (nb2 % i == 0) {
            return false;
        }
    }
    var resultat = nb1 + nb2;
    console.log(resultat);
}
console.log(sommenombrespremiers(1, 3))