<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="UTF-8">
    <title>Khaosedia</title>

    <style type="text/css"></style>
    <link rel="stylesheet" href="style/style.css">

    <script type="text/javascript" src="style/fonctionsJS.js"></script>

</head>
<body>

    <div class="choix_contenu">
        <p>
            <label>Ajouter une nouvelle race :</label>
            <input type="radio" name="choix" id="id_race" value="race" onclick="afficherDivContenu();">
        </p>
        <p>
            <label>Ajouter une nouvelle ville :</label>
            <input type="radio" name="choix" id="id_ville" value="ville" onclick="afficherDivContenu();">
        </p>
        <p>
            <label>Ajouter une nouvelle organisation :</label>
            <input type="radio" name="choix" id="id_organisation" value="organisation" onclick="afficherDivContenu();">
        </p>
    </div>
    <div class="NewRace" id="NewRace">
        <form action="index.php" method="POST">
            <fieldset>
                <legend>Ajouter une race/espèce</legend>
                <p>
                    <label for="nom_race">Nom de la race/espèce : </label>
                    <input type="text" name="nom_race" required>
                </p>
                <p>
                    <label for="region_origine">Region d'origine : </label>
                    <input type="text" name="region_origine">
                </p>
                <p>
                    <label for="alimentation">Alimentation : </label>
                    <select name="alimentation" id="alimentation">
                        <option disabled selected value>--Sélèctionnez un type d'alimentation--</option>
                        <optgroup label="Carnivore">
                            <option value="carnivore">Carnivore</option>
                            <option value="piscivore">Piscivore</option>
                            <option value="hematophage">Hématophage</option>
                            <option value="oophage">Oophage</option>
                        </optgroup>

                        <optgroup label="Vegetarien">
                            <option value="herbivore">Herbivore</option>
                            <option value="granivore">Granivore</option>
                            <option value="frugivore">Frugivore</option>
                            <option value="nectarivore">Nectarivore</option>
                        </optgroup>
                        <optgroup label="Omnivore">
                            <option value="omnivore">Omnivore</option>
                        </optgroup>
                    </select>
                </p>
                <p>
                    <label for="divinite">Divinité principale : </label>
                    <input type="text" name="divinite">
                </p>
                <p>
                    <label for="info_supp_race">Information(s) <br/>supplémentaire(s) : </label>
                    <textarea name="info_supp_race"></textarea>
                </p>
            </fieldset>
        </form>
    </div>
    <div class="NewVille" id="NewVille">
        <form action="index.php" method="POST">
            <fieldset>
                <legend>Ajouter une ville</legend>
                <p>
                    <label for="nom_ville">Nom de la ville : </label>
                    <input type="text" name="nom_ville" required>
                </p>
                <p>
                    <label for="continent_ville">Continent : </label>
                    <input type="text" name="continent_ville">
                </p>
                <p>
                    <label for="region_ville">Region : </label>
                    <input type="text" name="region_ville">
                </p>
                <p>
                    <label for="nomDir">Nom du dirigeant : </label>
                    <input type="text" name="nomDir">
                </p>
                <p>
                    <label for="allegence_ville">Allégence de la ville : </label>
                    <input type="text" name="allegence_ville">
                </p>
                <p>
                    <label for="categorie_ville">Type de ville : </label>
                    <select>
                        <option disabled selected value>--Sélèctionnez le type de ville--</option>
                        <option value="capitale">Capitale</option>
                        <option value="citee fortifiee">Cité Fortifiée</option>
                        <option value="ville">Bourg</option>
                        <option value="village">Village</option>
                    </select>
                </p>
                <p>
                    <label for="fonction_ville">Fonction(s) de la ville : </label>
                    <textarea name="fonction_ville"></textarea>
                </p>
                <p>
                    <label for="info_supp_ville">Information(s) <br/>supplémentaire(s) : </label>
                    <textarea name="info_supp_ville"></textarea>
                </p>
            </fieldset>
        </form>
    </div>
    <div class="NewOrganisation" id="NewOrganisation">
        <form action="index.php" method="POST">
            <fieldset>
                <legend>Ajouter une organisation</legend>
                <p>
                    <label for="nom_orga">Nom de l'organisation: </label>
                    <input type="text" name="nom_orga">
                </p>
                <p>
                   <label for="nbMembresPouv">Nombre de dirigeants :</label>
                   <input type="number" name="nbMembresPouv" id="nbMembresPouv" min="0" max="10" onblur="CreerInputDir();">
                </p>
                <div id="membresPouv"> </div>
                <p>
                    <label for="secteur">Secteur(s) d'activité : </label>
                    <textarea name="secteur"></textarea>
                </p>
                <p>
                    <label for="info_supp_orga">Information(s) <br/> supplémentaire(s) : </label>
                    <textarea name="info_supp_orga"></textarea>
                </p>
            </fieldset>
        </form>
    </div>
   <p>
        <input type="button" onclick="location.href='KhaosAccueil.php';" value="Retour Accueil"/>
    </p> 
</body>