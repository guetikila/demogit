<?php
//PARAMETRES => dateAdd(date,JOUR,MOIS,ANNEE) Retour date.
	function myAddDate($date,$j_add=0,$m_add=0,$a_add=0)  
	{
		$dateD = strtotime($date);
		if($j_add>0)  $j_add="+".$j_add;
		if($m_add>0)  $m_add="+".$m_add;
		if($a_add>0)  $a_add="+".$a_add;
		$dateF=date('Y-m-d', strtotime($j_add.' day', $dateD ));
		$dateD = strtotime($dateF);
		$dateF=date('Y-m-d', strtotime($m_add.' month', $dateD ));
		$dateD = strtotime($dateF);
		$dateF=date('Y-m-d', strtotime($a_add.' year', $dateD ));
		return $dateF;
	}
?>