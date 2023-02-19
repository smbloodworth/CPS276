<?php

class Calculator {

    public function calc($operator, $firstNumber=1, $secondNumber=2){
        if (is_string($operator) && (is_int($firstNumber) || is_float($firstNumber)) && (is_int($secondNumber) || is_float($secondNumber))) { // Checks for up to three arguments, then checks for types string, number, number

            if ($operator === "+") {
                add($firstNumber, $secondNumber); // Calls for addition logic
            } else if ($operator === "-") {
                subtract($firstNumber, $secondNumber); // Calls for subtraction logic
            } else if ($operator === "*") {
                multiply($firstNumber, $secondNumber); // Calls for multiplication logic
            } else if ($operator === "/") {
                divide($firstNumber, $secondNumber); // Calls for division logic
            } else { // Catches if a string other than +, -, *, or / is entered
                return "You must enter a string and two numbers";
            }

        } else { // Triggers for any bad arguments for either numbers
            return "You must enter a string and two numbers"; 
        }
    }


    //NEED TO FIGURE OUT WHY THESE AREN'T BEING CALLED RIGHT  :[


    function add($firstNumber, $secondNumber) {
        $answer = ($firstNumber + $secondNumber);
        return "The sum of the numbers is {$answer}";
    }

    function subtract($firstNumber, $secondNumber) {
        $answer = ($firstNumber - $secondNumber);
        return "The difference of the numbers is {$answer}";
    }

    function multiply($firstNumber, $secondNumber) {
        $answer = ($firstNumber * $secondNumber);
        return "The product of the numbers is {$answer}";
    }

    function divide($firstNumber, $secondNumber) {
        if ($secondNumber != 0) {
            $answer = ($firstNumber / $secondNumber);
            return "The division of the numbers is {$answer}";
        } else {
            return "Cannot divide by zero";
        }
    }
}

?>