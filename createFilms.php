<?php
	// Jasper
	require "Films.php";
	
	// maken objecten -----------------------
	$films1 = new Film("software developer", "Khalid", "3012GF");
	$films2 = new Film("system & devices", "Gisella", "3055PL");
	
	// afdrukken objecten -------------------
	echo $films1->get_FilmId();
	echo "<br/>";
	echo $films1->get_filmNaam();
	echo "<br/>";
	echo $films1->get_filmDatum();
	echo "<br/>";
	echo $films1->get_filmTijdsduur();
	echo "<br/>";
	echo $films1->get_filmGrene();
	echo "<br/>";
	echo $films1->get_filmLeeftijd();
	echo "<br/>";
	echo $films1->get_filmOmschrijving();
    echo "<br/>";
	echo $films1->kijken();

	echo "<br/><br/>";
	
	echo $films2->get_filmId();
	echo "<br/>";
	echo $films2->get_filmNaam();
	echo "<br/>";
	echo $films2->get_filmDatum();
	echo "<br/>";
	echo $films2->get_filmTijdsduur();
	echo "<br/>";
	echo $films2->get_filmGrene();
	echo "<br/>";
	echo $films2->get_filmLeeftijd();
	echo "<br/>";
	echo $films2->get_filmOmschrijving();
    echo "<br/>";
    echo $films2->kijken();
	echo "<br/><br/>";
	
?> 