<?php

class Movie{
  public $title;
  public $genere;
  public $timing;
  public $actors;
  public $image;

  public function __construct(string $_title, string $_genere, int $_timing, array $_actors, Poster $_poster = null){
    $this->title = $_title;
    $this->genere = $_genere;
    $this->timing = $_timing;
    $this->actors = $_actors;
    $this->image = $_poster;
  }

  public function setImg(Media $_poster){
    $this->image = $_poster;
  }
};