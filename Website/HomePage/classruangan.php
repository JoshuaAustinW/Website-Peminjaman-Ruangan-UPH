<?php

class Ruangan
{
  // Define properties
  private $no;
  private $tipe;
  private $kapasitas;
  private $lokasi;

  // Define constructor
  public function __construct($no, $tipe, $kapasitas, $lokasi)
  {
    $this->no = $no;
    $this->tipe = $tipe;
    $this->kapasitas = $kapasitas;
    $this->lokasi = $lokasi;
  }

  // Define methods
  public function getno()
  {
    return $this->no;
  }

  public function gettipe()
  {
    return $this->tipe;
  }

  public function getkapasitas()
  {
    return $this->kapasitas;
  }

  public function getlokasi()
  {
    return $this->lokasi;
  }

  public function setno($no)
  {
    $this->no = $no;
  }

  public function settipe($tipe)
  {
    $this->tipe = $tipe;
  }

  public function setkapasitas($kapasitas)
  {
    $this->kapasitas = $kapasitas;
  }

  public function setlokasi($lokasi)
  {
    $this->lokasi = $lokasi;
  }
}

?>