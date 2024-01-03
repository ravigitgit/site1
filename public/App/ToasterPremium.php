<?php

namespace App;

class ToasterPremium extends Toaster {      // extends keyword is used for inheritance
  protected int $slots;
  private int $duration;

  public function __construct(int $newDuration) {
    parent::__construct();
    $this->slots = 4;
    $this->$duration = $newDuration;
  }

  public function toast() {
    parent::toast();
    echo " for {$this->$duration} minutes.";
  }
}
