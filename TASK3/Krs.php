<?php
class Krs
{
  protected $dpa;
  protected $mataKuliah = [];

  public function tambahMataKuliah($mataKuliah)
  {
    $this->mataKuliah[] = $mataKuliah;
  }

  public function setDpa($dpa)
  {
    $this->dpa = $dpa;
  }

  public function getMataKuliah()
  {
    return $this->mataKuliah;
  }
}
