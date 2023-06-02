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
    public function __construct($Lijst = NULL, $GekekenDatum = NULL, $GekekenTijd = NULL)
    {
        $this->Lijst = $Lijst;
        $this->GekekenDatum = $GekekenDatum;
        $this->GekekenTijd = $GekekenTijd;
    }

    // setters
    public function set_GekekenDatum($GekekenDatum)
    {
        $this->GekekenDatum = $GekekenDatum;
    }
    // set_naam() en set_postcode worden geërfd van Persoon

    // getters
    public function get_GekekenDatum()
    {
        return $this->GekekenDatum;
    }

    // setters
    public function set_GekekenTijd($GekekenTijd)
    {
        $this->GekekenTijd = $GekekenTijd;
    }
    // set_naam() en set_postcode worden geërfd van Persoon

    // getters
    public function get_GekekenTijd()
    {
        return $this->GekekenTijd;
    }
    // get_naam() en get_postcode worden geërfd van Persoon

    // methoden om gegevens af te drukken ---------------------------------
    public function voorstellen()
    {
        echo "De anime die ik heb gekeken is" . $this->get_AnimeNaam()
            . ", De datum dat ik het heb gekeken is"
            . $this->get_GekekenDatum()
            . ". En de tijd is" . $this->get_GekekenTijd();
    }

    public function afdrukkenAnimeKlantInfo()
    {
        echo $this->get_AnimeNaam();
        echo "<br/>";
        echo $this->get_GekekenDatum();
        echo "<br/>";
        echo $this->get_GekekenTijd();
        echo "<br/><br/>";
    }

    // crud methoden ------------------------------------------------------
    public function createAnimeKlantInfo()        // gegevens in de database zetten
    {
        require "FilmsConnect.php";
        // gegevens uit het object in variabelen zetten
        $Anime_id = NULL;                // zit niet in het object
        $AnimeNaam = $this->get_AnimeNaam();
        $GekekenDatum = $this->get_GekekenDatum();
        $GekekenTijd = $this->get_GekekenTijd();

        // statement maken voor invoer in de tabel
        $sql = $conn->prepare
        ("
				insert into AnimeKlantInfo values
				(:Anime_id, :AnimeNaam, :GekekenDatum, :GekekenTijd)
			");
        // variabelen in de statement zetten
        $sql->bindParam(":Anime_id", $Anime_id);
        $sql->bindParam(":GekekenDatum", $GekekenDatum);
        $sql->bindParam(":AnimeNaam", $AnimeNaam);
        $sql->bindParam(":GekekenTijd", $GekekenTijd);
        $sql->execute();
        // melding
        echo "Deze AnimeKlantInfo is toegevoegd: <br/>";

    }

    public function readAnime()
    {
        require "FilmsConnect.php";
        // statement maken
        $sql = $conn->prepare("
									select Anime_id, GekekenDatum, AnimeNaam, GekekenTijd 
									from AnimeKlantInfo  
								 ");
        $sql->execute();
        foreach ($sql as $AnimeKlantInfo) {
            // gegevens uit de array in het object stoppen
            // en gelijk afdrukken
            echo $AnimeKlantInfo["Anime_id"] . " - ";        // geen eigenschap van object
            echo $this->AnimeNaam = $AnimeKlantInfo["AnimeNaam"] . " - ";
            echo $this->GekekenDatum = $AnimeKlantInfo["GekekenDatum"] . " - ";
            echo $this->GekekenTijd = $AnimeKlantInfo["GekekenTijd"] . "<br/>";
        }
    }

    public function updateAnimeKlantInfo($Anime_id)
    {
        require "FilmsConnect.php";
        // gegevens uit het object in variabelen zetten
        $Anime_id;
        $AnimeNaam = $this->get_AnimeNaam();
        $GekekenDatum = $this->get_GekekenDatum();
        $GekekenTijd = $this->get_GekekenTijd();
        // statement maken
        $sql = $conn->prepare("
									update AnimeKlantInfo
									set GekekenDatum=:GekekenDatum, AnimeNaam=:AnimeNaam, GekekenTijd=:GekekenTijd
									where Anime_id=:Anime_id
								 ");
        // variabelen in de statement zetten
        $sql->bindParam(":Anime_id", $Anime_id);
        $sql->bindParam(":GekekenDatum", $GekekenDatum);
        $sql->bindParam(":AnimeNaam", $AnimeNaam);
        $sql->bindParam(":GekekenTijd", $GekekenTijd);
        $sql->execute();
    }

    public function deleteAnimeKlantInfo($Anime_id)
    {
        require "FilmsConnect.php";
        // statement maken
        $sql = $conn->prepare("
									delete from AnimeKlantInfo
									where Anime_id = :Anime_id
								 ");
        // variabele in de statement zetten
        $sql->bindParam(":Anime_id", $Anime_id);
        $sql->execute();
    }

    public function searchAnimeKlantInfo($Anime_id)
    {
        require "FilmsConnect.php";

        // statement maken
        $sql = $conn->prepare("
									select Anime_id, opleiding, AnimeNaam, GekekenTijd
									from AnimeKlantInfo
									where Anime_id = :Anime_id			
								 ");
        // variabele in de stament zetten
        $sql->bindParam(":Anime_id", $Anime_id);
        $sql->execute();

        // gegevens uit de array in het object stoppen
        foreach ($sql as $AnimeKlantInfo) {
            //echo $animeklantinfo["anime_id"]. "<br/>";		// geen eigenschap van object
            $this->AnimeNaam = $AnimeKlantInfo["AnimeNaam"];
            $this->GekekenDatum = $AnimeKlantInfo["GekekenDatum"];
            $this->GekekenTijd = $AnimeKlantInfo["GekekenTijd"];
        }
    }
}
