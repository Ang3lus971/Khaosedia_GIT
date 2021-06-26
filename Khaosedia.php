<?php

require_once('controleur/controleur.php');

try {
	if(isset($_POST['Khaosedia'])) {
		CtlKhaospedia();
	}

	elseif(isset($_POST['Contenu'])) {
		CtlContenu();
	}

	elseif(isset($_POST['Personnage'])) {
		CtlPersonnage();
	}

	else {
		CtlAccueil();
	}
} 
catch (Exception $e) {
		CtlErreur($e->getMessage());
}