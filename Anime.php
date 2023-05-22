<?php

class Anime
{
    // properties - eigenschappen ---------------------
    protected $Anime_id;
    protected $AnimeNaam;
    protected $Datum;
    protected $Tijdsduur;
    protected $Leeftijd;
    protected $Genre;
    protected $Link;

    // methoden - functies ----------------------------
    // constructor
    function __construct($Anime_id=NULL, $AnimeNaam=NULL, $Datum=NULL, $Tijdsduur=NULL, $Leeftijd=NULL, $Genre=NULL, $Link=NULL)
    {
        $this->Anime_id=$Anime_id;
        $this->AnimeNaam=$AnimeNaam;
        $this->Datum=$Datum;
        $this->Tijdsduur=$Tijdsduur;
        $this->Leeftijd=$Leeftijd;
        $this->Genre=$Genre;
        $this->Link=$Link;
    }

    // setters
    public function set_AnimeNaam($AnimeNaam)
    {
        $this->AnimeNaam=$AnimeNaam;
    }
    public function set_Datum($Datum)
    {
        $this->Datum=$Datum;
    }
    public function set_Tijdsduur($Tijdsduur)
    {
        $this->Tijdsduur=$Tijdsduur;
    }
    public function set_Leeftijd($Leeftijd)
    {
        $this->Leeftijd=$Leeftijd;
    }
    public function set_Genre($Genre)
    {
        $this->Genre=$Genre;
    }

    // getters
    public function get_AnimeNaam()
    {
        return $this->AnimeNaam;
    }
    public function get_Datum()
    {
        return $this->Datum;
    }
    public function get_Tijdsduur()
    {
        return $this->Tijdsduur;
    }
    public function get_Leeftijd()
    {
        return $this->Leeftijd;
    }
    public function get_Genre()
    {
        return $this->Genre;
    }
}


