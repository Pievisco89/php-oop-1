<?php

  class Movie {

    public $title;
    public $director;
    public $year;
    private $recommended_age;
    private $recommended_msg;

    static $counter = 0;

    /* Costruttore */
    public function __construct($_title,  $_recommended_age)
    {

      $this->title = $_title;
      $this->recommended_age = $_recommended_age;
      $this->setRecommended_msg();
      self::$counter++;

    }

    /* Metodo pubblico */
    public function setYear($_year)
    {
      $this->year = $_year;
    }

    public function getRecommended_msg()
    {
      return $this->recommended_msg;
    }

    /* Metodo privato */
    private function setRecommended_msg()
    {
      if($this->recommended_age < 14){
        $this->recommended_msg = "Visione adatta a tutti!";
      }else{
        $this->recommended_msg = "Vietato ai minori di 14 anni!";
      }
    }

    /* Metodo statico */
    static function getCounter()
    {
      return self::$counter;
    }


  }

?>