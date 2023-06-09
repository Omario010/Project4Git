<?php

// Klant
// Anjo Eijeriks
class Klant
{
    // variabelen
    protected $klantVoornaam;
    protected $klantAchternaam;

    // methoden

    // constructor
    public function __construct($klantVoornaam = NULL, $klantAchternaam = NULL)
    {
        $this->klantVoornaam = $klantVoornaam;
        $this->klantAchternaam = $klantAchternaam;
    }

    // setters (nu nog niet nodig)

    // getters
    public function getKlantVoornaam()
    {
        return $this->klantVoornaam;
    }

    public function getKlantAchternaam()
    {
        return $this->klantAchternaam;
    }

    // aanmelden() createklant
    public function aanmelden()
    {
        require "connect.php";

        // gegevens uit het object in variabelen zetten
        $klantVoornaam = $this->getKlantVoornaam();
        $klantAchternaam = $this->getKlantAchternaam();
        $achternaamHash = password_hash($klantAchternaam, PASSWORD_DEFAULT);

        $sql = $conn->prepare("INSERT INTO klanten(VoorNaam, Achternaam) VALUES (:klantvoornaam, :klantachternaam)");

        // variabelen in the statement zetten
        $sql->bindParam(":klantvoornaam", $klantVoornaam);
        $sql->bindParam(":klantachternaam", $achternaamHash);
        $sql->execute();

        // melding geven
        echo "De klant is in de database gezet.<br/>";
    }

    // inloggen() searchKlant
    public function inloggen()
    {
        require "connect.php";

        // deze methode is nog niet af!
    }

    // alleKlanten() readklant
    public static function alleKlanten()
    {
        require "connect.php";

        $sql = $conn->prepare("SELECT * FROM klanten");
        $sql->execute();

        $newList = [];

        foreach ($sql as $klant) {
            $newCustomer = new Klant($klant["VoorNaam"], $klant["Achternaam"]);
            array_push($newList, $newCustomer);
        }

        return $newList;
    }

    public function afdrukkenKlant()
    {
        echo $this->getKlantVoornaam();
        echo "<br/>";
        echo $this->getKlantAchternaam();
    }
}
?>


