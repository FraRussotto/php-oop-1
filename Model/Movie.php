<?php

class Movie extends Productions{
  public $running_time;
  public $published_year;

  public function __construct(string $_title, string $_genere, array $_actors, Media $_image = null, int $_running_time, int $_published_year){
    $this->running_time = $_running_time;
    $this->published_year = $_published_year;

    parent::__construct($_title, $_genere, $_actors, $_image);
  }

  public function setImg(Media $_image){
    $this->image = $_image;
  }
};