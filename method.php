<?php 

class Test{
  public $name;
  public$location;

  public function welcome( $name,$location){
    echo $this->location = $location;
    echo $this->name = $name;
  }
}

$map = new Test("Rajshahi","bangladesh");
