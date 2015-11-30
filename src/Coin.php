<?php
    class Coin
    {
        function changeDue($amount)
        {
            if ($amount >= 100)
            {
                return 'the amount you entered is in excess of 1 whole dollar';
            }

            $quarters = (($amount - ($amount % 25)) / 25);
            $amount = ($amount % 25);

            $dimes = (($amount - ($amount % 10)) / 10);
            $amount = ($amount % 10);

            $nickels = (($amount - ($amount % 5)) / 5);
            $amount = ($amount % 5);

            $pennies = ($amount / 1);

            $combinations = $quarters . " quarters, " . $dimes . " dimes, " . $nickels . " nickels, " . $pennies . " pennies";
            return $combinations;
        }
    }
 ?>
