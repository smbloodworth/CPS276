<?php

class Calculator {

    public function calc($operator, $firstNumber=1, $secondNumber=2){
        if (is_string($operator) && (is_int($firstNumber) || is_float($firstNumber)) && (is_int($secondNumber) || is_float($secondNumber))) { // Checks for up to three arguments, then checks for types: string, number, number
           
            if ($firstNumber !== null && $secondNumber !== null) { //ATTEMPTING TO CATCH TOO FEW ARGUMENTS ENTERED

                 if ($operator === "+") {
                    echo $this->add($firstNumber, $secondNumber); // Calls for addition logic
                } else if ($operator === "-") {
                    echo $this->subtract($firstNumber, $secondNumber); // Calls for subtraction logic
                } else if ($operator === "*") {
                    echo $this->multiply($firstNumber, $secondNumber); // Calls for multiplication logic
                } else if ($operator === "/") {
                    echo $this->divide($firstNumber, $secondNumber); // Calls for division logic
                } else { // Catches if a string other than +, -, *, or / is entered
                    return "You must enter a string and two numbers"."<br>";
                }
            }
        } else { // Triggers for any bad arguments for either numbers
            return "You must enter a string and two numbers"."<br>"; 
        }
    }


    function add($firstNumber, $secondNumber) { // Actual addition happening here
        $answer = ($firstNumber + $secondNumber);
        return "The sum of the numbers is {$answer}"."<br>";
    }

    function subtract($firstNumber, $secondNumber) { // Actual subtraction happening here
        $answer = ($firstNumber - $secondNumber);
        return "The difference of the numbers is {$answer}"."<br>";
    }

    function multiply($firstNumber, $secondNumber) { // Actual multiplication happening here
        $answer = ($firstNumber * $secondNumber);
        return "The product of the numbers is {$answer}"."<br>";
    }

    function divide($firstNumber, $secondNumber) { // Actual division happening here
        if ($secondNumber != 0) {
            $answer = ($firstNumber / $secondNumber);
            return "The division of the numbers is {$answer}"."<br>" ;
        } else { // Catches any attempt to divide by zero
            return "Cannot divide by zero"."<br>";
        }
    }
}

?>