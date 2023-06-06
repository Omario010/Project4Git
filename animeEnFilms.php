<?php

require "Anime.php";
require "Films.php";

class animeEnFilms extends Anime
{

    // crud methoden ------------------------------------------------------
    public function createAnimeKlantInfo()        // gegevens in de database zetten
    {

        // statement maken voor invoer in de tabel
        $sql = $conn->prepare
        ("
				insert into AnimeKlantInfo values
				(:Anime_id, :AnimeNaam)
			");
        // variabelen in de statement zetten
        $sql->bindParam(":Anime_id", $Anime_id);
        $sql->bindParam(":AnimeNaam", $AnimeNaam);
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
        }
    }

    public function updateAnimeKlantInfo($Anime_id)
    {
        require "FilmsConnect.php";
        // gegevens uit het object in variabelen zetten
        $Anime_id;
        $AnimeNaam = $this->get_AnimeNaam();
        // statement maken
        $sql = $conn->prepare("
									update AnimeKlantInfo
									set AnimeNaam=:AnimeNaam
									where Anime_id=:Anime_id
								 ");
        // variabelen in de statement zetten
        $sql->bindParam(":Anime_id", $Anime_id);
        $sql->bindParam(":AnimeNaam", $AnimeNaam);
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
									select Anime_id, AnimeNaam
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

        }
    }
}
