<?php

class Ruangan
{
  public $no;
  public $tipe;
  public $kapasitas;
  public $lokasi;

  public function __construct($no, $tipe, $kapasitas, $lokasi)
  {
    $this->no = $no;
    $this->tipe = $tipe;
    $this->kapasitas = $kapasitas;
    $this->lokasi = $lokasi;
  }
}

?>