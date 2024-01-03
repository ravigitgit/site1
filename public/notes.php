<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <br>

        <?php
        include 'nav.php';                 // use this when script can also run without nav.php
        // include_once 'nav.php';         // it throws Warning
        // require 'nav.php';              // use this when nav.php is necessary
        // require_once 'nav.php';         // it throws Fatal error


        // This is a single-line comment
        /*
        Multiline comment
        */
        # Single-line comment

        echo "<h1>Hello World</h1><br>";



        echo "My name is Ravi<br><br>";


        var_dump(5_000_000);   //int data type

        var_dump(123.45);  //float data type

        $data = null;   //NULL data type
        var_dump($data);

        $isLoggedIn = true;  //bool data type
        var_dump($isLoggedIn);
        echo "<br>";

        $firstName = 'Ravi';
        var_dump($firstName);  //string data type in single ''

        $lastName = "$firstName Tiwari";
        var_dump($lastName);   //string interpolation using ""
        $lastName = "{$firstName}'s Tiwari";
        var_dump($lastName);   //string interpolation using "" and {}
        echo "<br>";

        $list = ['sabji', 'phal', 'dal'];  //array
        $list[] = ['roti'];   //adding a thing to array
        var_dump($list[1]);
        echo "<br>";

        $list = [
          'ravi' => 'sabji',
          'john' => 'phal',
          'sam' => 'dal'
        ];                      //associative array
        $list['john'] = 'chaval';
        $list['bob'] = 'roti';
        var_dump($list);
        echo "<br>";

        $list = [
          'ravi' => ['sabji','bhaaji'],
        ];                      //multidimensional array
        var_dump($list['ravi'][1]);
        echo "<br>";


        // Type Casting
        // Booleans
        var_dump((bool) "");             // -> false
        var_dump((bool) "Some Text");    // -> true
        var_dump((boolean) "0");         // -> false
        var_dump((bool) "false");        // -> true
        var_dump((bool) 0);              // -> false
        var_dump((bool) 1);              // -> true
        var_dump((bool) -1);             // -> true
        var_dump((bool) null);           // -> false
        var_dump((bool) []);             // -> false
        var_dump((bool) ["hello"]);      // -> true

        // Integers
        // var_dump((int) false);        // -> 0
        // var_dump((integer) true);     // -> 1
        // var_dump((int) "-1");         // -> -1
        // var_dump((int) "Hello");      // -> 0
        // var_dump((int) "12 months");  // -> 12
        // var_dump((int) 12.7);         // -> 12
        // var_dump((int) null);         // -> 0

        // Float
        // var_dump((float) false);      // -> 0
        // var_dump((float) true);       // -> 1
        // var_dump((float) "-1");       // -> -1
        // var_dump((float) "Hello");    // -> 0
        // var_dump((float) "2.5 Hour"); // -> 2.5
        // var_dump((float) null);       // -> 0

        // Strings
        // var_dump((string) false);     // -> ""
        // var_dump((string) true);      // -> "1"
        // var_dump((string) 0);         // -> "0"
        // var_dump((string) 1.353);     // -> "1.353"
        // var_dump((string) []);        // -> "Array"
        // var_dump((string) ["John"]);  // -> "Array"
        // var_dump((string) null);      // -> ""

        // Arrays
        // var_dump((array) false);      // -> [false]
        // var_dump((array) true);       // -> [true]
        // var_dump((array) 0);          // -> [0]
        // var_dump((array) 1.353);      // -> [1.353]
        // var_dump((array) "John");     // -> ["John"]
        // var_dump((array) null);       // -> []
        echo "<br>";


        //type juggling
        // echo(string ...$expressions): void     // echo takes string but we can give int
        echo (string) 30;
        echo "<br>";


        // Arithmetic Operator      + - / * % **
        var_dump(11 % 2);
        var_dump(10 ** 2);
        var_dump(1+2-3*4/5);
        var_dump(1+(2-3)*4/5);
        echo "<br>";


        //Assignment Operator       =
        $ab = 10;
        $ab = $ab + 4;
        $ab += 4;
        var_dump($ab);
        echo "<br>";


        //Comparison Operator       ==  ===  !=  <  >
        var_dump(
          1 == 1,
          1 == '1'                    // type juggling
        );
        echo "<br>";
        var_dump(
          1 === 1,
          1 === '1'                    // type juggling
        );
        echo "<br>";
        var_dump(
          1 != 1,
          1 !== '1',                    // type juggling
          2 < 3,
          2 > 3,
          2 <= 3,
          2 >= 3
        );
        echo "<br>";


        // Error control Operator       @
        var_dump(
          (string) [1]
        );
        echo "<br>";
        @var_dump(
          (string) [1]
        );
        echo "<br>";


        // Increment and Decrement Operators   ++  --
        $c = 16;
        $c++;
        var_dump($c);
        echo "<br>";


        // Logical Operator               &&,and   ||,or    !
        $age = 29;
        $data = $age > 18 && $age <65;
        var_dump($data);
        echo "<br>";

        $age = 15;
        $permission = "admin";
        $data = $permission === "admin" || $permission;
        var_dump($data);
        echo "<br>";

        $age = 29;
        $permission = "";
        $data = !$permission;
        var_dump($data);
        echo "<br>";


        // Operator Precedence          BODMAS
        // $a = 5 < 2 > 8;
        $a = true && false;
        var_dump($a);

        $a = true and false;
        var_dump($a);                  //dont use and
        echo "<br>";



        // Constants
        const FULL_NAME="Ravi Tiwari";
        var_dump(FULL_NAME);
        echo "<br>";

        // String Concatenation
        var_dump("Hello my name is " . FULL_NAME);
        echo "<br>";
        $message = "Hello, name is ";
        $message .= FULL_NAME;
        var_dump($message);
        echo "<br>";


        // Control Structure        if else
        $score = 1;

        if ($score > 90) {
          var_dump('A');
        } else if ($score > 80) {
          var_dump('B');
        } else if ($score >70) {
          var_dump('C');
        } else {
          var_dump('F');
        }
        echo "<br>";


        // Switch Statements   it does not produce Expression
        $paymentStatus = 2;

        switch($paymentStatus) {
          case 1:
            var_dump('Success');
            break;
          case 2:
            var_dump('Pending');
            break;
          default:
            var_dump('Unknown');

        }
        echo "<br>";


        // Match Expressions   it produce Expression and can be stored in a value
        $paymentStatus = 2;
        $message = match($paymentStatus) {
          1 => 'Success',
          2 => 'Denied',
          default => 'Unknown'
        };

        var_dump($message);
        echo "<br>";



        // Functions
        // function getStatus() {
        //   $paymentStatus = 2;
        //   $message = match($paymentStatus) {
        //     1 => 'Success',
        //     2 => 'Denied',
        //     default => 'Unknown'
        //   };
        //   var_dump($message);
        // }
        //
        // getStatus();
        // echo "<br>";



        // Function Parameters
        // function getStatus($paymentStatus, $showMessage) {   // Parameters
        //   $message = match($paymentStatus) {
        //     1 => 'Success',
        //     2 => 'Denied',
        //     default => 'Unknown'
        //   };
        //   if ($showMessage){
        //   var_dump($message);
        // }
        // }
        //
        // getStatus(1, true);         // Arguments (1, true)
        // echo "<br>";


        // Function Return Values
        // function getStatus($paymentStatus, $showMessage = true) {   // Parameters
        //   $message = match($paymentStatus) {
        //     1 => 'Success',
        //     2 => 'Denied',
        //     default => 'Unknown'
        //   };
        //   if ($showMessage){
        //   var_dump($message);
        // }
        // return $message;
        // }
        //
        // $statusMessage = getStatus(1);         // Arguments (1, true)
        // var_dump($statusMessage);
        // echo "<br>";


        // Type Hinting(?string) & Union Types(int|float , mixed)
        // function getStatus(int|float $paymentStatus, bool $showMessage = true) : ?string {
        //   $message = match($paymentStatus) {
        //     1 => 'Success',
        //     2 => 'Denied',
        //     default => 'Unknown'
        //   };
        //   if ($showMessage){
        //   var_dump($message);
        //   return null;                          // if returning NULL use Type Hinting (?string)
        // }
        // return $message;
        // }
        //
        // $statusMessage = getStatus(1);
        // var_dump($statusMessage);
        // echo "<br>";


        // Strict Types
        // declare(strict_types=1);   it should be used at the very first statement in the script

        function getStatus(int|float $paymentStatus, bool $showMessage = true) : ?string {
          $message = match($paymentStatus) {                    // return Type (string)
            1 => 'Success',
            2 => 'Denied',
            default => 'Unknown'
          };
          if ($showMessage){
          var_dump($message);
          return null;                          // if returning NULL use Type Hinting (?string)
        }
        return $message;
        }

        $statusMessage = getStatus('1');
        var_dump($statusMessage);
        echo "<br>";


        // Short Circuiting
        function example() {
          echo "Example called!";

          return true;
        }

        var_dump(false && example());     // if 1st condition is false then the second condition will not execute
        var_dump(true && example());      // in this the function will execute


        // While Loop
        $a = 1;

        while ($a <= 5) {
          echo $a . "<br>";

          $a++;
        }


        // Do While Loop
        $a = 1;

        do {
          echo $a . "<br>";

          $a++;
        } while ($a <= 5);


        // For Loop
        for ($i = 1; $i <= 5; $i++) {
          if ($i === 3) {                     // after 2 the loop will break
            break;
          }
          echo $i . "<br>";
        }


        // Foreach Loop
        $names = ['Ravi', 'Himanshu', 'Papa', 'Mummy'];

        foreach($names as $key => $name) {
          var_dump($key);
          var_dump($name);
        }



        // Constants
        echo PHP_VERSION . "<br>";
        echo PHP_INT_MAX . "<br>";
        echo PHP_INT_MIN . "<br>";
        echo PHP_FLOAT_MAX . "<br>";
        echo PHP_FLOAT_MIN . "<br>";


        // Magic Constants
        echo __LINE__ . "<br>";
        echo __FILE__ . "<br>";
        echo __DIR__ . "<br>";


        // Creating Constants
        // define('FOO', 'Hello World!');
        // echo FOO;


        // we can create constant inside an if statement
        // !defined is used to check if constant is defined or not
        // it return boolean value 'true'
        if (!defined('FOO'))
        {
          define('FOO', 'Hello world!');
        }

        echo FOO . "<br>";


        // Unsetting Variables
        $names = ['Ravi','Himanshu','Pandey','Tiwari'];
        print_r($names);               //it does not print the data type like var_dump()
        echo "<br>";
        unset($names[2]);
        print_r($names);
        echo "<br>";
        $names = array_values($names);    //reset index of array
        print_r($names);
        echo "<br>";


        // Rounding Numbers
        echo 5.454 ."<br>";
        echo (int) 5.454 ."<br>";
        echo floor(5.454) ."<br>";
        echo ceil(5.454) ."<br><br>";

        echo round(5.454) ."<br>";
        echo round(5.455, 2) ."<br>";
        echo round(5.455, 2, PHP_ROUND_HALF_DOWN) ."<br>";


        // Alternative if statement syntax
        $permission = 1;

        if ($permission === 1) {
          ?><h1>Hello admin</h1><?php
        } else if ($permission === 2) {
          ?><h1>hello mod</h1><?php
        } else {
          ?><h1>hello guest</h1><?php
        }


        /* if writing like this elseif should have no gap
         <?php $permission = 1; ?>

        <?php if ($permission === 1) : ?>
          <h1>hello admin</h1>
        <?php elseif($permission === 2) : ?>
          <h1>hello mod</h1>
        <?php else : ?>
          <h1>hello guest</h1>
        <?php endif; ?>
        */


        // add files link in PHP

        // $link_address1 = 'about.php';
        // echo "</br></br><a href='$link_address1'>About</a></br>";



        // Variadic Functions
        // Variadic Argument should be the Last Argument
        function sum(bool $dumpArr, int|float ...$nums) {
          if ($dumpArr) {
            var_dump($nums);
          }
          return array_sum($nums);
        }

        echo sum(false, 5,2,9,10) ."<br>";



        // Named Arguments
        function sum1($a, $b) {
          var_dump($a, $b);
          return $a + $b;
        }

        echo sum1(b:5, a:2) ."<br>";



        // Global Variables
        $x = 5;

        include 'example.php';

        function foo() {
          global $x;

          echo $x;

          $x++;
        }

        foo();

        echo $x ."<br>";




        // Static Variables

        function foo1() {
          static $a = 1;

          return $a++;
        }

        echo foo1() ."<br>";
        echo foo1() ."<br>";
        echo foo1() ."<br>";



        // Anonymous and Arrow Functions
        // Anonymous function can be called multiple times
        // but if they have same name then the last one get called

        $multiplier = 2;

        $multiply = function ($num) {
          $multiplier = 5;
          return $num * $multiplier;
        };

        function sum2(int|float $a, int|float $b, callable $callback) {  // Callable data type
          return $callback($a + $b);       // callback function
        }

        echo sum2(5,2, $multiply) ."<br>";

        // Arrow Function is the new Anonymous Function
        $multiply1 = fn ($num) => $num * $multiplier;
        echo sum2(5,2, $multiply1) ."<br>";




        // Passing by Reference

        $myCup = 'empty';
        $myFriendsCup = 'empty';

        function fillCup(&$cupParam) {     // & used before variable can change the variable
          $cupParam = 'filled';
        }

        fillCup($myCup);
        fillCup($myFriendsCup);

        echo $myCup ."<br>";




        // Array Functions

        $users = ['John', 'Jane', 'Bob', null];

        if (array_key_exists(3, $users)) {
          echo "User found!<br>";
        }

        // $users = array_filter($users, fn($user) => $user !== 'Bob');    // for filtering the array
        // $users = array_values($users);   // for reindexing

        // $users = array_map(fn($user) => strtoupper($user), $users);

        $users = array_merge($users, ['Sam', 'Jessica']);

        // sort($users);         // sorting function with reindexing

        asort($users);          // sorting without reindexing

        echo '<pre>';         // for clean output
        print_r($users);
        echo '</pre>';


        // Destructuring Arrays

        $nums = ['example' => 5,3,9,11];

        ['example' => $a, 0 => $b] = $nums;

        echo $a ."<br>";


        // Working with Files
        // . is current directory ,  .. parent directory
        $directory = scandir(__DIR__);   // scan directory
        print_r($directory);
        echo "<br>";

        mkdir('foo');         // create folder foo
        print_r($directory);
        echo "<br>";

        rmdir('foo');       // remove folder foo

        if (file_exists('example.txt')) {  // finding a file
          echo filesize('example.txt');   // file size

          file_put_contents(
            'example.txt', 'Hello World'   // putting contents in size
          );

          clearstatcache();    // clearing system cache

          echo file_get_contents('example.txt');   // display file contents
        }






    ?>
    </div>
</body>
</html>
