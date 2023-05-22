<?php
require "Klant.php";

class Anime extends klant
{
    // properties - eigenschappen -----------------------------------------
    protected $anime;
    // $naam en $postcode worden geërfd van Persoon

    // methoden - functies ------------------------------------------------
    // constructor
    public function __construct($anime=NULL, $naam=NULL, $postcode=NULL)
    {
        $this->anime=$anime;
        $this->naam=$naam;
        $this->postcode=$postcode;
    }
    // setters
    public function set_anime($anime)
    {
        $this->anime=$anime;
    }
    // set_naam() en set_postcode worden geërfd van Persoon

    // getters
    public function get_anime()
    {
        return $this->anime;
    }
    // get_naam() en get_postcode worden geërfd van Persoon

    // methoden om gegevens af te drukken ---------------------------------
    public function voorstellen()
    {
        echo "Mijn naam is ".$this->get_naam()
            .", ik doe de opleiding "
            .$this->get_anime()
            .". Mijn postcode is ".$this->get_postcode();
    }
    public function afdrukkenKlant()
    {
        echo $this->get_naam();
        echo "<br/>";
        echo $this->get_postcode();
        echo "<br/>";
        echo $this->get_anime();
        echo "<br/><br/>";
    }
    // crud methoden ------------------------------------------------------
    public function createKlant()		// gegevens in de database zetten
    {
        require "FilmsConnect.php";
        // gegevens uit het object in variabelen zetten
        $studentid = NULL; 				// zit niet in het object
        $naam =      $this->get_naam();
        $postcode =  $this->get_postcode();
        $anime = $this->get_anime();

        // statement maken voor invoer in de tabel
        $sql = $conn->prepare
        ("
				insert into studenten values
				(:studentid, :anime, :naam, :postcode)
			");
        // variabelen in de statement zetten
        $sql->bindParam(":studentid", $studentid);
        $sql->bindParam(":anime", $anime);
        $sql->bindParam(":naam", 	  $naam);
        $sql->bindParam(":postcode",  $postcode);
        $sql->execute();
        // melding
        echo "Deze student is toegevoegd: <br/>";

    }
    public function readAnime()
    {
        require "FilmsConnect.php";
        // statement maken
        $sql = $conn->prepare("
									select studentid, anime, naam, postcode 
									from klanten  
								 ");
        $sql->execute();
        foreach($sql as $klant)
        {
            // gegevens uit de array in het object stoppen
            // en gelijk afdrukken
            echo $klant["studentid"]. " - ";		// geen eigenschap van object
            echo $this->naam=$klant["naam"]. " - ";
            echo $this->anime=$klant["anime"]. " - ";
            echo $this->postcode=$klant["postcode"]. "<br/>";
        }
    }
    public function updateStudent($studentid)
    {
        require "FilmsConnect.php";
        // gegevens uit het object in variabelen zetten
        $studentid;
        $naam 		= $this->get_naam();
        $postcode 	= $this->get_postcode();
        $opleiding 	= $this->get_anime();
        // statement maken
        $sql = $conn->prepare("
									update klanten
									set anime=:anime, naam=:naam, postcode=:postcode
									where studentid=:studentid
								 ");
        // variabelen in de statement zetten
        $sql->bindParam(":studentid", $studentid);
        $sql->bindParam(":anime", $anime);
        $sql->bindParam(":naam", $naam);
        $sql->bindParam(":postcode", $postcode);
        $sql->execute();
    }
    public function deleteStudent($studentid)
    {
        require "FilmsConnect.php";
        // statement maken
        $sql = $conn->prepare("
									delete from klanten
									where studentid = :studentid
								 ");
        // variabele in de statement zetten
        $sql->bindParam(":studentid", $studentid);
        $sql->execute();
    }
    public function searchStudent($studentid)
    {
        require "FilmsConnect.php";

        // statement maken
        $sql = $conn->prepare("
									select studentid, anime, naam, postcode
									from studenten
									where studentid = :studentid			
								 ");
        // variabele in de stament zetten
        $sql->bindParam(":studentid", $studentid);
        $sql->execute();

        // gegevens uit de array in het object stoppen
        foreach($sql as $klant)
        {
            //echo $student["studentid"]. "<br/>";		// geen eigenschap van object
            $this->naam=$student["naam"];
            $this->anime=$student["anime"];
            $this->postcode=$student["postcode"];
        }
    }
}

