<?php


// Properties = data inside the class

declare(strict_types=1);

namespace App;

use DateTime;  // to use this in custom namespace you have to 'use'
new DateTime;

/* you can also create Alias
use DateTime as DT;
new DT();

*/

class Account {
  public const INTEREST_RATE = 2;
  public static int $count = 0;   // static property is similar to const but can be changed

  public SocialMedia $socialMedia;  // using class as a data type

  public function __construct(
    private string $newName,      // getter & setter is introduced
    private float $balance        // when using private property
  ) {
    $this->socialMedia = new SocialMedia();

    self::$count++;         // self keyword is used for static properties
  }

  public function deposit(float $amount) {
    $this->balance += $amount;

    return $this;
  }
  public function getBalance() {            // getter
    return "$" . $this->balance;
  }
  public function setBalance(float $newBalance) {  // setter
    if ($newBalance < 0) {
      return;
    }

    $this->balance = $newBalance;
    $this->sendEmail();
  }
  private function sendEmail() {

  }
}
