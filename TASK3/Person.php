<?php
abstract class Person
{
  protected $nama;

  // Konstruktor untuk Person
  public function __construct($nama)
  {
    $this->nama = $nama;
  }

  public function getNama()
  {
    return $this->nama;
  }

  abstract public function getInfo(); // Metode abstrak
}
