<?php
class Puppet {
  private $color;
  private $weight;
  private $TvShow;
  private $aka;  

  public function __construct($color, $weight, $TvShow, $aka) {
    $this->color = $color;
    $this->weight = $weight;
    $this->TvShow = $TvShow;
    $this->aka = $aka;
    
  }

  public function PrintEngine() {
    echo "Color: $this->color | Peso: $this->weight | TvShow: $this->TvShow | As Known As: $this->aka";
  }
}