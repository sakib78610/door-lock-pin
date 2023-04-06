<?php

namespace Sakib78610\DoorsPin;

class DoorsPin {


    public function checkDoorPin($pin_digits) {
        $j = 0;    
        $pin = ""; 
        while($j < $pin_digits){
            $pin .= mt_rand(0, 9);  //generate a random number between 0 and 9.
            $j++;
        }
        return $pin;
    }

    public function checkPalindrome($pin) {
      $revPin = 0;
      $number = $pin;    
      while($number > 0) {
        $digit = $number % 10;
        $revPin = $revPin * 10 + $digit;
        $number = (int)($number / 10);
      }    
      if ($pin == $revPin){
        return true;
      } else {
        return false;
      }
    }

    public function checkSequentialNumber($pin) {
        $array  = array_map('intval', str_split($pin));
        return ((int)max($array)-(int)min($array) == (count($array)-1));     // check for consecutive numbers
    }

    public function checkforRepeatingNumbers($pin) {
       $array  = array_map('intval', str_split($pin));
       return count($array) !== count(array_unique($array));
    }

    public function generateRandomDoorPin() {
        do {
            $check_door_pin = $this->checkDoorPin(4);
            // check palindrome pin
            $check_if_palindrome = $this->checkPalindrome($check_door_pin);
            // check sequential pin
            $check_if_sequential = $this->checkSequentialNumber($check_door_pin);
            // check for repeating numbers
            $check_if_repeating_number = $this->checkforRepeatingNumbers($check_door_pin);
        } while ($check_if_palindrome || $check_if_sequential || $check_if_repeating_number);        
        return $check_door_pin;
    }

    
}