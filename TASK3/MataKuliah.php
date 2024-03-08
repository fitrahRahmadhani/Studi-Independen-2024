<?php
class MataKuliah
{
  protected $nama;
  protected $jadwal;
  protected $sks;

  public function __construct($nama, $jadwal, $sks)
  {
    $this->nama = $nama;
    $this->jadwal = $jadwal;
    $this->sks = $sks;
  }

  public function getNama()
  {
    return $this->nama;
  }

  public function getJadwal()
  {
    return $this->jadwal;
  }

  public function getSks()
  {
    return $this->sks;
  }
}
