<?php
declare(strict_types = 1);
include 'nav.php';
ini_set('display_errors', true);


// Procedural Programming
// a style where programs are subdivided into Functions


// class

// require_once 'App/Account.php';
// require_once 'App/SocialMedia.php';

// by adding this function we do not have to require_once every class
// we can only do this for class only
spl_autoload_register(function($class) {
  // it replace a portion of string with another string
  $formattedClass = str_replace("\\", "/", $class);
  $path = "{$formattedClass}.php";

  require_once $path;
});


// using App namespace
use App\{Account, SocialMedia, Utility, ToasterPremium,
   RestaurantOne, RestaurantTwo, FoodApp, EmptyArrayException, CurrentWeek};  

/* you can also import multiple classes from same namespace
use App\{Account, SocialMedia};
*/

// $myAccount = new Account('john', 20);
// $johnsAccount = new Account;

// $myAccount->balance = 20;   // you can change the properties of class

// var_dump($myAccount->balance);  // you can access the properties with ->

// $myAccount = new Account('john',20);
// new DateTime();    // you dont have to 'use' to use in global namespace

// $myAccount?->deposit(50)->deposit(30);   // calling a function inside a class
//                                         // method chaining
//                                         // ? create a Null class
// var_dump($myAccount);
//
// var_dump($myAccount::INTEREST_RATE);  //accessing constant from inside the class
// var_dump(Account::INTEREST_RATE);     //accessing constant from inside the class
//
// var_dump(Account::$count);         //accessing static properties
//
// Utility::printArr([34,43,5]);      // static methods

// echo $myAccount->getBalance() ."<br>";      // encapsulation & Abstraction


// $myToaster = new ToasterPremium(3);      // inheritance
// $myToaster->toast();

// echo "<br>";

// $restaurant = new RestaurantOne();
// $restaurant->prepareFood();

// echo "<br>";                              // polymorphism

// $restaurant1 = new FoodApp(
// new RestaurantTwo()

// );

// Anonymous class
// $restaurant1 = new FoodApp(
// new class("popup restaurant") implements RestaurantInterface{
//   public function __construct(public string $name)  {
//   }

//   public function prepareFood() {
//     echo "Popup restaurant preparing food";
//   }                  
// });

// try {
// Utility::printArr([]);        // Throwing Exception
// } catch ( InvalidArgumentException|EmptyArrayException $e) {
//   echo "Custom exception: {$e->getMessage()} <br>";
// } catch (Exception $e) {
//   echo "Default exception: {$e->getMessage()} <br>";
// } finally {
//   echo "Finally block <br>";
// }
//
// echo "Finished running script";


$timezone = new DateTimeZone("Asia/Kolkata");
$date = new DateTime("11/28/23", $timezone);
$date->setTimezone(new DateTimeZone("Europe/Paris"))
    ->setDate(2023, 6, 15)
    ->setTime(9, 30);

echo "<pre>";
var_dump($date->format("F j Y"));
echo "</pre>";


//  Iterator
// $currentWeek = new CurrentWeek();

// foreach ($currentWeek as $key => $value) {
//   var_dump($key, $value);
//   echo "<br>";
// }
//  Iterable
$currentWeek = new CurrentWeek();
function foo5(iterable $iterable) {
  foreach ($iterable as $key => $value) {
    var_dump($key, $value);
    echo "<br>";
  }
}
foo5($currentWeek);


echo "<br>";
//var_dump($johnsAccount);

// phpinfo();
// ini_set('memory_limit', '255M');
// echo ini_get('memory_limit');
