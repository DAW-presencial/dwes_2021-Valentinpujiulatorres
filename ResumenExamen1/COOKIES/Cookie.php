<?php

class Cookie
{
  public $Nombre;
  protected $Apellidos;
  private $BankAccount;
  

  public function __construct($Nombre, $Apellidos , $BankAccount)
  {
    $this->Nombre = $Nombre;
    $this->Apellidos = $Apellidos;
    $this->BankAccount = $BankAccount;
    
  }

  // Getting non existing or inaccessible properties
  public function __get($Atributo)
  {
    // Non existing properties
    if ($Atributo === 'Nombre')
      return $this->Nombre;
    if ($Atributo === 'Apellidos')
      return $this->Apellidos;

    // Inaccessible properties
    if ($Atributo === 'BankAccount')
      return $this->BankAccount;
    if ($Atributo === 'Apellidos')
      return $this->Apellidos;
  }

  // Setting protected and private properties
  public function __set($Atributo, $valor)
  {
    if ($Atributo === 'BankAccount')
      $this->BankAccount = $valor;
    if ($Atributo === 'Apellidos')
      $this->Apellidos = $valor;
  }
}