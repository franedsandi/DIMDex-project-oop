<?php
class Evolution {
  public $Evolution_name;
  public $requirement;

  public function __construct($_Evolution_name = 'none', $_requirement = 'none'){
    $this->Evolution_name = $_Evolution_name;
    $this->requirement = $_requirement;
  }
}
?>