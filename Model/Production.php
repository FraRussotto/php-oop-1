<?php

class Production{
  public $title;
  public $genere;
  public $actors;
  public $image;

  public function __construct(string $_title, string $_genere, array $_actors, Media $_poster = null){
    $this->title = $_title;
    $this->genere = $_genere;
    $this->actors = $_actors;
    $this->image = $_poster;
  }

  public function setImg(Media $_poster){
    $this->image = $_poster;
  }
};