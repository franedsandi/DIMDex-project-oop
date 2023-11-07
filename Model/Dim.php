<?php
class Dim {
  public $dim_name;
  public $dim_type;
  public $stages;

  public function __construct($_dim_name, $_dim_type, $_stages ){
    $this->dim_name = $_dim_name;
    $this->dim_type = $_dim_type;
    $this->stages = $_stages;
  }
}
?>
