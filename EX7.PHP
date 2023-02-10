<?php
class Ville {
  public $nom;
  public $departement;

  public function __construct($nom, $departement) {
    $this->nom = $nom;
    $this->departement = $departement;
  }

  public function afficher() {
    echo "La ville " . $this->nom . " est dans le département " . $this->departement . ".";
  }
}

$ville1 = new Ville("Paris", "75");
$ville1->afficher();

echo "<br>";

$ville2 = new Ville("Lyon", "69");
$ville2->afficher();
?>