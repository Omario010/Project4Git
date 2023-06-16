<?php

require "Anime.php";

class animeKlantInfo extends Anime
{
    // properties - eigenschappen -----------------------------------------
    protected $Lijst;
    protected $GekekenDatum;
    protected $GekekenTijd;

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


    // getters
    public function get_GekekenTijd()
    {
        return $this->GekekenTijd;
    }

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
									from animeKlantInfo  
								 ");
        $sql->execute();
        foreach ($sql as $animeKlantInfo) {
            // gegevens uit de array in het object stoppen
            // en gelijk afdrukken
            echo $animeKlantInfo["Anime_id"] . " - ";        // geen eigenschap van object
            echo $this->AnimeNaam = $animeKlantInfo["AnimeNaam"] . " - ";
            echo $this->GekekenDatum = $animeKlantInfo["GekekenDatum"] . " - ";
            echo $this->GekekenTijd = $animeKlantInfo["GekekenTijd"] . "<br/>";
        }
    }

    public function updateAnimeKlantInfo($anime_id)
    {
        require "FilmsConnect.php";
        // gegevens uit het object in variabelen zetten
        $anime_id;
        $animeNaam = $this->get_AnimeNaam();
        $gekekenDatum = $this->get_GekekenDatum();
        $gekekenTijd = $this->get_GekekenTijd();
        // statement maken
        $sql = $conn->prepare("
									update animeKlantInfo
									set gekekenDatum=:gekekenDatum, animeNaam=:animeNaam, gekekenTijd=:gekekenTijd
									where Anime_id=:Anime_id
								 ");
        // variabelen in de statement zetten
        $sql->bindParam(":Anime_id", $anime_id);
        $sql->bindParam(":gekekenDatum", $gekekenDatum);
        $sql->bindParam(":animeNaam", $animeNaam);
        $sql->bindParam(":gekekenTijd", $gekekenTijd);
        $sql->execute();
    }

    public function deleteAnimeKlantInfo($Anime_id)
    {
        require "FilmsConnect.php";
        // statement maken
        $sql = $conn->prepare("
									delete from animeKlantInfo
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
									from animeKlantInfo
									where Anime_id = :Anime_id			
								 ");
        // variabele in de stament zetten
        $sql->bindParam(":Anime_id", $Anime_id);
        $sql->execute();

        // gegevens uit de array in het object stoppen
        foreach ($sql as $animeKlantInfo) {
            //echo $animeklantinfo["anime_id"]. "<br/>";		// geen eigenschap van object
            $this->AnimeNaam = $animeKlantInfo["AnimeNaam"];
            $this->GekekenDatum = $animeKlantInfo["GekekenDatum"];
            $this->GekekenTijd = $animeKlantInfo["GekekenTijd"];
        }
    }
}
