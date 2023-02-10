<?php
class Calculatrice {
  private $val1;
  private $val2;

  public function __construct($val1, $val2) {
    $this->val1 = $val1;
    $this->val2 = $val2;
  }

  public function add() {
    return $this->val1 + $this->val2;
  }

  public function subtract() {
    return $this->val1 - $this->val2;
  }

  public function multiply() {
    return $this->val1 * $this->val2;
  }

  public function divide() {
    return $this->val1 / $this->val2;
  }
}

/*$mycalc = new Calculatrice(12, 6);
echo $mycalc->add(); // Affiche 18
echo "<br>";
echo $mycalc->multiply(); // Affiche 72*/
?>