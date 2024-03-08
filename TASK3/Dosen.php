<?php
require_once 'Person.php';
class Dosen extends Person
{
  protected $nomorInduk;

  // Konstruktor untuk Dosen
  public function __construct($nama, $nomorInduk)
  {
    parent::__construct($nama);
    $this->nomorInduk = $nomorInduk;
  }

  public function getNama()
  {
    return $this->nama;
  }

  public function getNomorInduk()
  {
    return $this->nomorInduk;
  }

  // Implementasi metode getInfo() untuk Dosen
  public function getInfo()
  {
    return "Dosen: " . $this->nama . ", Nomor Induk: " . $this->nomorInduk;
  }
}
