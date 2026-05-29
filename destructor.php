<?php
class Fruit {
  public $name;
  public $color;
  
  function rasa() {
      echo "rasanya manis.<br>";
    }
  function __destruct() {
      echo "Name: " . $this->name . ". Color: " . $this->color .".<br>";
  }

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
     echo "Buah apa?.<br>";
  }


}

$apple = new Fruit('Apple', 'Red');
$banana = new Fruit('Banana', 'Yellow');
$apple->rasa();

?>