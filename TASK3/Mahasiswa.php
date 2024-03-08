<?php
require_once 'Person.php';
class Mahasiswa extends Person
{
  protected $nim;
  protected $jurusan;
  protected $krs; // Objek KRS
  protected $dosenWali;

  // Konstruktor untuk Mahasiswa
  public function __construct($nama, $nim, $jurusan)
  {
    parent::__construct($nama);
    $this->nim = $nim;
    $this->jurusan = $jurusan;
    $this->krs = new KRS();
  }

  public function getNim()
  {
    return $this->nim;
  }

  public function getJurusan()
  {
    return $this->jurusan;
  }

  public function getKrs()
  {
    return $this->krs;
  }

  public function tambahMataKuliah($mataKuliah)
  {
    $this->krs->tambahMataKuliah($mataKuliah);
  }

  public function setDosenWali($dosen)
  {
    $this->dosenWali = $dosen;
  }

  public function getDosenWali()
  {
    return $this->dosenWali;
  }

  // Implementasi metode getInfo() untuk Mahasiswa
  public function getInfo()
  {
    return "Mahasiswa: " . $this->nama . ", NIM: " . $this->nim . ", Jurusan: " . $this->jurusan;
  }
}
