<?php
/*
Abstract Class & Methods - it can be with or without implementation
it should always have public methods
because it is created to be used by other classes
 */
namespace App;

abstract class AbstractProduct {
  public function turnOn() {
    echo "Turning on product ";
  }

  abstract public function setup();
}
