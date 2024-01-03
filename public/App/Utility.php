<?php

namespace App;


class Utility {
  /**             // Docblocks
   * 
   * Neatly prints an array        
   * 
   * Outputs an array surrounded by pre tags for formatting
   * 
   * @param array $array The array to output
   * 
   */
  public static function printArr(array $array) {
    if (count($array) === 0) {
      throw new EmptyArrayException();
    }
    
    echo '<pre>';
    print_r($array);
    echo '<pre>';
  }
}
