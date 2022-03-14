function jourtravaille(date){
    var date = new Date(date)
    var date_fr = date.toLocaleDateString('fr-FR'); //date en français

    var ferie=[
        new Date(2020,01,01),
        new Date(2020,04,13),
        new Date(2020,05,01),
        new Date(2020,05,08),
        new Date(2020,05,21),
        new Date(2020,06,01),
        new Date(2020,07,14),
        new Date(2020,08,15),
        new Date(2020,11,01),
        new Date(2020,11,11),
        new Date(2020,12,25),
    ];


    if (ferie == true) {
        console.log("Le " + date_fr + " est un jour férié");
    }
    else if (date.getDay() == 6 || date.getDay() == 0 ){
        console.log("Non, Le " + date_fr + " est un weekend");
    }
    else {
        console.log("Oui, Le " + date_fr + " est un jour de travail");
    }

}
jourtravaille("2022-03-13")