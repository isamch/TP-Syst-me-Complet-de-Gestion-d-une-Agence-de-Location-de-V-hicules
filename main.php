<?php
// Enter your code here, enjoy!

interface ReservableInterface {
	public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation;
}

abstract class Vehicule {
	protected $id;
	protected $immatriculation;
	protected $marque;
	protected $disponible;
	protected $modele;
	protected $prixJour;
	
	abstract public function getType(): string;

	public function afficherDetails(){
		return [
			$this->id,
			$this->immatriculation,
			$this->marque,
			$this->modele,
			$this->prixJour,
			$this->disponible,
		];
	}
	
	public function calculerPrix(int $jours): float {
		return $this->prixJour * $jours;
	}
	
	public function estDisponible(): bool {
		return $this->disponible;
	}
	
}


class Voiture extends Vehicule implements ReservableInterface {
	
	public $nbPortes;
	public $transmission;
	
	
	public function __construct($id, $immatriculation, $marque, $modele, $prixJour, $disponible, $nbPortes, $transmission){

		$this->id = $id;
		$this->immatriculation = $immatriculation;
		$this->marque = $marque;
		$this->modele = $modele;
		$this->prixJour = $prixJour;
		$this->disponible = $disponible;
		
		$this->nbPortes = $nbPortes;
		$this->transmission = $transmission;

	}
	
	
	
	public function getType(){
		return $this;
	}
	
	public function afficherDetails(){
		return [
			parrent::afficherDetails(),
			$this->$nbPortes,
			$this->$transmission,
		];
	}
	
	
	public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation {
		
		
	}
	

}


class Moto extends Vehicule implements ReservableInterface {
	private $cylindree;
	
	public function __construct ($id, $immatriculation, $marque, $modele, $prixJour, $disponible, $cylindree){
		$this->id = $id;
		$this->immatriculation = $immatriculation;
		$this->marque = $marque;
		$this->modele = $modele;
		$this->prixJour = $prixJour;
		$this->disponible = $disponible;
		
		$this->cylindree = $cylindree;

	}
	
	public function getType(){
		return $this;
	}
	
	public function afficherDetails(){
		return [
			parrent::afficherDetails(),
			$this->$cylindree,
		];
	}
	
	public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation {
		
		
		
	}
	
	

}


class Camion extends Vehicule implements ReservableInterface {
	private $capaciteTonnage;
	
	public function __construct ($id, $immatriculation, $marque, $modele, $prixJour, $disponible, $capaciteTonnage){

		$this->id = $id;
		$this->immatriculation = $immatriculation;
		$this->marque = $marque;
		$this->modele = $modele;
		$this->prixJour = $prixJour;
		$this->disponible = $disponible;
		$this->capaciteTonnage = $capaciteTonnage;

	}
	
	public function getType(){
		return $this;
	}

	public function afficherDetails(){
		return [
			parrent::afficherDetails(),
			$this->$capaciteTonnage,
		];
	}
	
	public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation {
		
		
		
	}
	
	
}



abstract class Personne {
	protected $nom, $prenom, $email;
	
	abstract public function afficherProfil();

}




class Client extends Personne {
	public $numeroClient, $reservations = [];
	
	public function __construct ($nom, $prenom, $email, $numeroClient){
		
		$this->id = $nom;
		$this->immatriculation = $prenom;
		$this->marque = $email;

		
		$this->numeroClient = $numeroClient;

	}
	
	
	
	public function ajouterReservation(Reservation $r) {
		
		
	}
	
	public function afficherProfil() {
		return [
			$this->nom,
			$this->prenom,
			$this->email,
			$this->numeroClient,
			$this->reservations,
		];
	}
	
	
	public function getHistorique() {
		return $this->reservations;
	}

	
}




class Agence {
	
	public $nom, $ville, $vehicules = [], $clients = [];
	
	
	public function ajouterVehicule(Vehicule $v) {
		
		$this->vehicules [] = $v;
		
	}


	public function rechercherVehiculeDisponible(string $type) {
		
		
		
	}
	
	public function enregistrerClient(Client $c) {

			
	}

	public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours): Reservation {
		
		
	}
	
	
}


class Reservation {
	
	public $vehicule, $client, $dateDebut, $nbJours, $statut;

	public function calculerMontant() {
		
		
	}
	
	
	public function confirmer(){

		
	}

	public function annuler(){
		
		
	}


	
}







// apply all this :

























