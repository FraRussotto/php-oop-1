<?php

class Media{
  public $file_name;
  public $name;
  public $poster;

  function __construct($_file_name, $_name){
    $this->file_name = $_file_name;
    $this->name = $_name;
  }
};