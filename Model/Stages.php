<?php
class Stages {
  public $stage;
  public $digimon;

  public function __construct($_stage, $_digimon){
    $this->stage = $_stage;
    $this->digimon = $_digimon;
  }

  public function getStage(){
    return $this->stage;
  }
}
?>