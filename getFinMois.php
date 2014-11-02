<?php
	/* Cette fonction retoune la fin du mois en cours par défaut. 
	Sinon, la fin du mois, du mois et de l'année en paramètre */
	
	function getFinMois($mois=0,$annee=0)
	{
		if($mois==0) $mois=gmdate('m');
		if($annee==0) $annee=gmdate('Y');
		return date( "t",mktime( 0, 0, 0, $mois, 1, $annee));
	}
?>