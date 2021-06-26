function afficherDivContenu(){
    if(document.getElementById('id_race').checked){

        document.getElementById('NewRace').style.display="block";
        document.getElementById('NewVille').style.display="none";
        document.getElementById('NewOrganisation').style.display="none";

    }

    else if(document.getElementById('id_ville').checked){
        
        document.getElementById('NewRace').style.display="none";
        document.getElementById('NewVille').style.display="block";
        document.getElementById('NewOrganisation').style.display="none";

    }

    else if(document.getElementById('id_organisation').checked){
        
        document.getElementById('NewRace').style.display="none";
        document.getElementById('NewVille').style.display="none";
        document.getElementById('NewOrganisation').style.display="block";

    }
}

function CreerInputDir() {
    var nbDir = (document.getElementById('nbMembresPouv').value).toString();
    var chaine = '';

    if(nbDir>10) {
        alert("Le nombre de dirigeants ne peut excéder 10 personnes.");
    }
    else {
        for (var i = 1; i <= nbDir; i++) {
        var numero = i.toString();
        chaine  = chaine + '<p>';
        chaine = chaine + '<label for='+"nomDir"+numero+'>' + "Nom Dirigent "+numero+' : </label>';
        chaine = chaine + '<input type="text" name='+"nomDir"+numero+'>';
        chaine  = chaine + '</p>';
        }
        document.getElementById('membresPouv').innerHTML=chaine;       
    }
}