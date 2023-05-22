<?php

require "Anime.php";

class AnimeKlantInfo extends Anime
{
    // properties - eigenschappen -----------------------------------------
    protected $Lijst;
    protected $GekekenDatum;
    protected $GekekenTijd;
    // $naam en $postcode worden geërfd van Persoon

    // methoden - functies ------------------------------------------------
    // constructor
    public function __construct($opleiding = NULL, $naam = NULL, $postcode = NULL)
    {
        $this->opleiding = $opleiding;
        $this->naam = $naam;
        $this->postcode = $postcode;
    }

    // setters
    public function set_opleiding($opleiding)
    {
        $this->opleiding = $opleiding;
    }
    // set_naam() en set_postcode worden geërfd van Persoon

    // getters
    public function get_opleiding()
    {
        return $this->opleiding;
    }
    // get_naam() en get_postcode worden geërfd van Persoon

    // methoden om gegevens af te drukken ---------------------------------
    public function voorstellen()
    {
        echo "Mijn naam is " . $this->get_naam()
            . ", ik doe de opleiding "
            . $this->get_opleiding()
            . ". Mijn postcode is " . $this->get_postcode();
    }

    public function afdrukkenStudent()
    {
        echo $this->get_naam();
        echo "<br/>";
        echo $this->get_postcode();
        echo "<br/>";
        echo $this->get_opleiding();
        echo "<br/><br/>";
    }

    // crud methoden ------------------------------------------------------
    public function createAnimeKlantInfo()        // gegevens in de database zetten
    {
        require "FilmsConnect.php";
        // gegevens uit het object in variabelen zetten
        $studentid = NULL;                // zit niet in het object
        $naam = $this->get_naam();
        $postcode = $this->get_postcode();
        $opleiding = $this->get_opleiding();

        // statement maken voor invoer in de tabel
        $sql = $conn->prepare
        ("
				insert into studenten values
				(:studentid, :opleiding, :naam, :postcode)
			");
        // variabelen in de statement zetten
        $sql->bindParam(":studentid", $studentid);
        $sql->bindParam(":opleiding", $opleiding);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":postcode", $postcode);
        $sql->execute();
        // melding
        echo "Deze student is toegevoegd: <br/>";

    }

    public function readAnime()
    {
        require "FilmsConnect.php";
        // statement maken
        $sql = $conn->prepare("
									select studentid, opleiding, naam, postcode 
									from AnimeKlantInfo  
								 ");
        $sql->execute();
        foreach ($sql as $AnimeKlantInfo) {
            // gegevens uit de array in het object stoppen
            // en gelijk afdrukken
            echo $AnimeKlantInfo["studentid"] . " - ";        // geen eigenschap van object
            echo $this->naam = $AnimeKlantInfo["naam"] . " - ";
            echo $this->opleiding = $AnimeKlantInfo["opleiding"] . " - ";
            echo $this->postcode = $AnimeKlantInfo["postcode"] . "<br/>";
        }
    }

    public function updateAnimeKlantInfo($studentid)
    {
        require "FilmsConnect.php";
        // gegevens uit het object in variabelen zetten
        $studentid;
        $naam = $this->get_naam();
        $postcode = $this->get_postcode();
        $opleiding = $this->get_opleiding();
        // statement maken
        $sql = $conn->prepare("
									update studenten
									set opleiding=:opleiding, naam=:naam, postcode=:postcode
									where studentid=:studentid
								 ");
        // variabelen in de statement zetten
        $sql->bindParam(":studentid", $studentid);
        $sql->bindParam(":opleiding", $opleiding);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":postcode", $postcode);
        $sql->execute();
    }

    public function deleteStudent($studentid)
    {
        require "schoolConnect.php";
        // statement maken
        $sql = $conn->prepare("
									delete from studenten
									where studentid = :studentid
								 ");
        // variabele in de statement zetten
        $sql->bindParam(":studentid", $studentid);
        $sql->execute();
    }

    public function searchStudent($studentid)
    {
        require "schoolConnect.php";

        // statement maken
        $sql = $conn->prepare("
									select studentid, opleiding, naam, postcode
									from studenten
									where studentid = :studentid			
								 ");
        // variabele in de stament zetten
        $sql->bindParam(":studentid", $studentid);
        $sql->execute();

        // gegevens uit de array in het object stoppen
        foreach ($sql as $student) {
            //echo $student["studentid"]. "<br/>";		// geen eigenschap van object
            $this->naam = $student["naam"];
            $this->opleiding = $student["opleiding"];
            $this->postcode = $student["postcode"];
        }
    }
}
