<?php

  class Movie {

    public $title;
    public $director;
    public $year;

    /* Costruttore */
    public function __construct($_title)
    {

      $this->title = $_title;

    }

    /* Metodo pubblico */
    public function setYear($_year)
    {
      $this->year = $_year;
    }


  }

?>