<?php
class Digimon {
  public $digimon_name;
  public $digimon_Atribute;
  public $digimon_BP;
  public $digimon_HP;
  public $digimon_AP;
  public $Activity_Type;
  public $Critical_Hit;
  public $Evolution;
  
  public function __construct($_digimon_name = 'none', $_digimon_Atribute = 'none', $_digimon_BP = 'none', $_digimon_HP = 'none', $_digimon_AP = 'none', $_Activity_Type = 'none', $_Critical_Hit = 'none', $_Evolution = 'none'){
    $this->digimon_name = $_digimon_name;
    $this->digimon_Atribute = $_digimon_Atribute;
    $this->digimon_BP = $_digimon_BP;
    $this->digimon_HP = $_digimon_HP;
    $this->digimon_AP = $_digimon_AP;
    $this->Activity_Type = $_Activity_Type;
    $this->Critical_Hit = $_Critical_Hit;
    $this->Evolution = $_Evolution;
  }
}
?>
