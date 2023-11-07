<?php
class Requirements {
  public $Time;
  public $PP;
  public $Vitals;
  public $Battles;
  public $Victory_Percent;
  public $Adventure_Cleared;
  public $jogress;

  public function __construct($_Time = 'none', $_PP = 'none', $_Vitals = 'none', $_Battles = 'none', $_Victory_Percent = 'none', $_Adventure_Cleared = 'none', $_jogress = 'none'){
    $this->Time = $_Time;
    $this->PP = $_PP;
    $this->Vitals = $_Vitals;
    $this->Battles = $_Battles;
    $this->Victory_Percent = $_Victory_Percent;
    $this->Adventure_Cleared = $_Adventure_Cleared;
    $this->jogress = $_jogress;
  }
}
?>