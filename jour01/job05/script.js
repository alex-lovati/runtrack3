function afficherjourssemaines(){
    const jourssemaines=[
        'Lundi',
        'Mardi',
        'Mercredi',
        'Jeudi',
        'Vendredi',
        'Samedi',
        'Dimanche',
    ]
    for (let i=0; i < jourssemaines.length; i++){
        const element=jourssemaines[i];
        console.log(element);
    }
}
afficherjourssemaines()