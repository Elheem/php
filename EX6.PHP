<?php
class Ville {
  public $nom;
  public $departement;

  public function afficher() {
    echo "La ville " . $this->nom . " est dans le département " . $this->departement . ".";
  }
}

$ville1 = new Ville();
$ville1->nom = "Paris";
$ville1->departement = "75";
$ville1->afficher();

echo "<br>";

$ville2 = new Ville();
$ville2->nom = "Lyon";
$ville2->departement = "69";
$ville2->afficher();
?>
