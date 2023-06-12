<?php

	// Jasper
	require "film.php";
	
	// maken van de objecten
	$film1 = new Film();
	$film1->set_filmId("");
	$film1->set_filmNaam("");
	$film1->set_filmDatum("");
	$film1->set_filmTijdsduur("");
	$film1->set_filmGrene("");
	$film1->set_filmTijdsduur("");
	$film1->set_filmOmschrijving("");
	
	
	
	$film2 = new Film();
	$film2->set_filmId("");
	$film2->set_filmNaam("");
	$film2->set_filmDatum("");
	$film2->set_filmTijdsduur("");
	$film2->set_filmGrene("");
	$film2->set_filmLeeftijd("");
	$film2->set_filmOmschrijving("");
	
	$film3 = new Film("", "", "", "", "", "", "", "", "");
	
	// afdrukken objecten
	echo $film1->get_FilmId();
	echo "<br/>";
	echo $film1->get_filmNaam();
	echo "<br/>";
	echo $film1->get_filmDatum();
	echo "<br/>";
	echo $film1->get_filmTijdsduur();
	echo "<br/>";
	echo $film1->get_filmGrene();
	echo "<br/>";
	echo $film1->get_filmLeeftijd();
	echo "<br/>";
	echo $film1->get_filmOmschrijving();
	echo "<br/><br/>";
	
	echo $film2->get_FilmId();
	echo "<br/>";
	echo $film2->get_filmNaam();
	echo "<br/>";
	echo $film2->get_filmDatum();
	echo "<br/>";
	echo $film2->get_filmTijdsduur();
	echo "<br/>";
	echo $film2->get_filmGrene();
	echo "<br/>";
	echo $film2->get_filmOmschrijving();
	echo "<br/><br/>";
	
	echo $film3->get_FilmId();
	echo "<br/>";
	echo $film3->get_filmNaam();
	echo "<br/>";
	echo $film3->get_filmDatum();
	echo "<br/>";
	echo $film3->get_filmTijdsduur();
	echo "<br/>";
	echo $film3->get_filmGrene();
	echo "<br/>";
	echo $film3->get_filmLeeftijd();
    echo "<br/>";
	echo $film3->get_filmOmschrijving();
	echo "<br/><br/>";
?>










