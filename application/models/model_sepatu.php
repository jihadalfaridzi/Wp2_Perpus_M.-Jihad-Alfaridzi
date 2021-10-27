<?php

class Model_sepatu extends CI_Model
{
  public $merk, $harga;

  public function harga($merk = Null)
  {
    $this->merk=$merk;
    if($this->merk == "Nike")
      {$this->harga=375000;}
    elseif($this->merk == "Adidas")
      {$this->merk=300000;}
    elseif($this->merk == "Kickers")
      {$this->merk=250000;}
    elseif($this->merk == "Eiger")
      {$this->merk=275000;}
    elseif($this->merk == "Bucherri")
      {$this->merk=400000;}
  return $this->harga;
  }
}