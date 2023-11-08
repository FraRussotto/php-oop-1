<?php

class Productions{

  use Genere;

  public $title;
  public $actors;
  public $image;

  public function __construct(string $_title, string $_genere, array $_actors, Media $_image = null){

    $this->title = $_title;
    $this->genere = $_genere;
    if(empty($_actors)){
      throw new Exception("- Inserire almeno un attore per production -");
    }else{
      $this->actors = $_actors;
    }
    $this->image = $_image;
  }

  public function setImg(Media $_image){
    $this->image = $_image;
  }
};