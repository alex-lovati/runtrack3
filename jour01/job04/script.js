var annee=prompt("annee:");
var resultat=bisextile(annee)
alert (resultat)
function bisextile (annee){
    var jours = new Date(annee,2,0).getDate()
    if(jours==29){
        document.write(annee + 'est bisextile')
        return (true)
    }
    else{
        document.write(annee + "n'est pas bisextile")
        return (false)
    }
}
