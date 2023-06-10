<?php
	// Jasper Kroon
	class Film
	{
		// properties - eigenschappen ---------------------
		protected $filmId;
		protected $filmNaam;
		protected $filmDatum;
		protected $filmTijdsduur;
		protected $filmGrene;
		protected $filmLeeftijd;
		protected $filmOmschrijving;
		

		
		// methoden - functies ----------------------------
		// constructor
		public function __construct($filmNaam=NULL, $filmDatum=NULL, $filmTijdsduur=NULL, $filmGrene=NULL, $filmLeeftijd=NULL, $filmOmschrijving=NULL)
		{
			$this->filmNaam=$filmNaam;
			$this->filmDatum=$filmDatum;
			$this->filmTijdsduur=$filmTijdsduur;
			$this->filmGrene=$filmGrene;
			$this->filmLeeftijd=$filmLeeftijd;
			$this->filmOmschrijving=$filmOmschrijving;
		}

		// setters
		public function set_filmId($filmId)
		{
			$this->filmId=$filmId;
		}
		public function set_filmNaam($filmNaam)
		{
			$this->filmNaam=$filmNaam;
		}
		public function set_filmDatum($filmDatum)
		{
			$this->filmDatum=$filmDatum;
		}
		public function set_filmTijdsduur($filmTijdsduur)
		{
			$this->filmTijdsduur=$filmTijdsduur;
		}
		public function set_filmGrene($filmGrene)
		{
			$this->filmGrene=$filmGrene;
		}
		public function set_filmLeeftijd($filmLeeftijd)
		{
			$this->filmLeeftijd=$filmLeeftijd;
		}
		public function set_filmOmschrijving($filmOmschrijving)
		{
			$this->filmOmschrijving=$filmOmschrijving;
		}
	
		
		// getters
		public function get_filmId()
		{
			return $this->filmId;
		}
		public function get_filmNaam()
		{
			return $this->filmNaam;
		}
		public function get_filmDatum()
		{
			return $this->filmDatum;
		}
		public function get_filmTijdsduur()
		{
			return $this->filmTijdsduur;
		}
		public function get_filmGrene()
		{
			return $this->filmGrene;
		}
		public function get_filmLeeftijd()
		{
			return $this->filmLeeftijd;
		}
		public function get_filmOmschrijving()
		{
			return $this->filmOmschrijving;
		}
		


		public function kijken()
		{
			echo "de naam van de film is ".$this->get_filmNaam()
			.", de grene is "
			.$this->get_filmGrene()
			.". De tijdsduur is ".$this->get_filmTijdsduur();
			echo "<br/>";
		}


		public function afdrukken()
		{
			echo $this->get_filmNaam();
			echo "<br/>";
			echo $this->get_filmTijdsduur();
			echo "<br/>";
			echo $this->get_filmGrene();
			echo "<br/>";
		}


		// crud-methoden 
		//create
		public function create()
		{
			echo "dit is createFilm() <br/>";
			require "connect.php";

			/*
			$sql = $conn->Prepare("INSERT INTO artikelen 
			(artOmschrijving) VALUES (:artOmschrijving)");
			$sql->bindParam(":artOmschrijving", $this->artOmschrijving); 
			$sql->execute();
			*/

			// statement maken voor invoer in de tabel
			$sql = $conn->Prepare("
				insert into films
				(filmNaam
				,filmDatum
				,filmTijdsduur
				,filmGrene
				,filmLeeftijd
				,filmOmschrijving
				)
				values
				(:filmNaam
				,:filmDatum
				,:filmTijdsduur
				,:filmGrene
				,:filmLeeftijd
				,:filmOmschrijving
				)
			");
			// variabelen in de statement zetten
			$sql->bindParam(":filmNaam",  $this->filmNaam);
			$sql->bindParam(":filmDatum",  $this->filmDatum);
			$sql->bindParam(":filmTijdsduur",  $this->filmTijdsduur);
			$sql->bindParam(":filmGrene",  $this->filmGrene);
			$sql->bindParam(":filmLeeftijd",  $this->filmLeeftijd);
			$sql->bindParam(":filmOmschrijving",  $this->filmOmschrijving);
			$sql->execute();
			// melding

			echo "De film is toegevoegd: <br/>";
		}


		//read
		public function readFilm($filmId)
		{

			require "connect.php";
			$sql = $conn->prepare("SELECT * FROM films WHERE filmId = :filmId");
			$sql->bindParam(":filmId", $filmId);
			$sql->execute();
			$item = $sql->fetch();
			if ($item) { // here! as simple as that
				$this->filmId = $item["filmId"];
				$this->filmNaam = $item["filmNaam"];
				$this->filmDatum = $item["filmDatum"];
				$this->filmTijdsduur = $item["filmTijdsduur"];
				$this->filmGrene = $item["filmGrene"];
				$this->filmLeeftijd = $item["filmLeeftijd"];
				$this->filmOmschrijving = $item["filmOmschrijving"];		
			}
			else
			{
				echo "film ".$this->filmId." niet gevonden";
			}

		}

		

		//delete
		public function delete()
		{
			require "connect.php";
			$sql = $conn->prepare("DELETE FROM films WHERE filmId = :filmId");
			$sql->bindParam(":filmId", $this->filmId);
			$sql->execute();
		}


		public function lijst()
		{
			require "connect.php";
			$sql = $conn->query("SELECT filmId FROM films");
			$films = $sql->fetchAll(PDO::FETCH_ASSOC);

			// display the publisher name
			foreach ($films as $films)
			{
				$film = new Film();
				$film->readFilm($films["filmId"]);
				$film->kijken();
			}
		}	
		

		public function update()
		{
			echo "dit is update() <br/>";
			require "connect.php";

			/*
			$sql = $conn->Prepare("INSERT INTO artikelen 
			(artOmschrijving) VALUES (:artOmschrijving)");
			$sql->bindParam(":artOmschrijving", $this->artOmschrijving); 
			$sql->execute();
			*/

			// statement maken voor invoer in de tabel
			$sql = $conn->Prepare("
				insert into films
				(filmId
				,filmNaam
				,filmDatum
				,filmTijdsduur
				,filmGrene
				,filmLeeftijd
				,filmOmschrijving
				)
				values
				(:filmId
				,:filmNaam
				,:filmDatum
				,:filmTijdsduur
				,:filmGrene
				,:filmLeeftijd
				,:filmOmschrijving
				)
			");

			// variabelen in de statement zetten
			$sql->bindParam(":filmId", $this->filmId); 
			$sql->bindParam(":filmNaam",  $this->filmNaam);
			$sql->bindParam(":filmDatum",  $this->filmDatum);
			$sql->bindParam(":filmTijdsduur",  $this->filmTijdsduur);
			$sql->bindParam(":filmGrene",  $this->filmGrene);
			$sql->bindParam(":filmLeeftijd",  $this->filmLeeftijd);
			$sql->bindParam(":filmOmschrijving",  $this->filmOmschrijving);
			$sql->execute();
			// melding

			echo "De film is geupdated: <br/>";
		}

		
		  //search
		  public function search()
		  {
			  echo "dit is search() <br/>";
			  require "connect.php";
  
			  /*
			  $sql = $conn->Prepare("INSERT INTO artikelen 
			  (artOmschrijving) VALUES (:artOmschrijving)");
			  $sql->bindParam(":artOmschrijving", $this->artOmschrijving); 
			  $sql->execute();
			  */
  
			  // statement maken voor invoer in de tabel
			  $sql = $conn->Prepare("
				  insert into films
				  (filmNaam
				  )
				  values
				  (:filmNaam
				  )
			  ");
			  // variabelen in de statement zetten
			  $sql->bindParam(":filmNaam", $this->filmNaam); 
			  $sql->execute();
			  // melding
  
			  echo "De film is gevonden: <br/>";
		  }
		  
		  }
?>
