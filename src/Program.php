<?php
class Program
{
    private $number;
    
    public function __construct($number) 
    {
        $this->number = $number;
    }

    public function modulus($divisor) 
    {
        if($divisor > $this->number) 
        {
            throw new \InvalidArgumentException("The divisor must not be greater than dividend");
        }
        else if(!is_numeric($divisor)) // - should only accept numbers
        {
            throw new \InvalidArgumentException("Divisor is not a number");
        }

        return $this->number % $divisor;
    }
}