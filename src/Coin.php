<?php
    class Coin
    {
        // private $pennies;
        // private $nickels;
        // private $dimes;
        // private $quarters;
        //
        // function __construct($pennies, $nickels, $dimes, $quarters)
        // {
        //     $this->pennies = $pennies;
        //     $this->nickels = $nickels;
        //     $this->dimes = $dimes;
        //     $this->quarters = $quarters;
        // }
        //
        // function getPennies()
        // {
        //     return $this->pennies;
        // }
        //
        // function setPennies($new_pennies)
        // {
        //     $this->pennies = $new_pennies;
        // }
        //
        // function getNickels()
        // {
        //     return $this->nickels;
        // }
        //
        // function setNickels($new_nickels)
        // {
        //     $this->nickels = $new_nickels;
        // }
        //
        // function getDimes()
        // {
        //     return $this->dimes;
        // }
        //
        // function setDimes($new_dimes)
        // {
        //     $this->dimes = $new_dimes;
        // }
        //
        // function getQuarters()
        // {
        //     return $this->quarters;
        // }
        //
        // function setQuarters($new_quarters)
        // {
        //     $this->quarters = $new_quarters;
        // }

        function changeDue($amount)
        {
            $pennies = ($amount / 1);
            // if (($amount % 25) == 0)
            // {
            //     $quarters = ($amount / 25);
            // }
            // elseif (($amount % 25) > 0)
            // {
            //     $quarters = (($amount - ($amount % 25)) / 25);
            //     $amount = ($amount % 25);
            //
            // }
            // else if (($amount % 10) == 0)
            // {
            //     $dimes = ($amount / 10);
            // }
            // elseif (($amount % 10) > 0)
            // {
            //     $dimes = (($amount = ($amount % 10)) / 10);
            //     if ((;
            //     $nickels =
            // }
            //
            // $combinations = $quarters . "quarters," . $dimes . "dimes," . $nickels . "nickels" . $pennies . "pennies";
            $combinations = $pennies . " pennies";
            return $combinations;
        }
    }
 ?>
