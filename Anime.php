<?php
class Anime
{
    // properties - eigenschappen ---------------------
    protected $animeId;
    public $animeNaam;
    protected $datum;
    public $tijdsduur;
    public $maker;
    public $tekenaar;
    protected $lijst;
    // methoden - functies ----------------------------
    // constructor
    function __construct($lijst = NULL)
    {
        $this->lijst = $lijst;
    }

    // setters
    public function set_lijst($lijst)
    {
        $this->lijst = $lijst;
    }

    // getters
    public function get_lijst()
    {
        return $this->lijst;
    }
}

