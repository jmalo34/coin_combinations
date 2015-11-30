<?php
    require_once "src/Coin.php";

    class CoinTest extends PHPUnit_Framework_TestCase
    {
        function test_change_penny()
        {
            //Arrange
            $test_change = new Coin;
            $input = 4;

            //Act
            $result = $test_change->changeDue($input);

            //Assert
            $this->assertEquals('0 quarters, 0 dimes, 0 nickels, 4 pennies', $result);
        }

        function test_change_nickel()
        {
            //Arrange
            $test_change = new Coin();
            $input = 9;

            //Act
            $result = $test_change->changeDue($input);

            //Assert
            $this->assertEquals('0 quarters, 0 dimes, 1 nickels, 4 pennies', $result);
        }

        function test_change_dime()
        {
            //Arrange
            $test_change = new Coin;
            $input = 18;

            //Act
            $result = $test_change->changeDue($input);

            //Assert
            $this->assertEquals('0 quarters, 1 dimes, 1 nickels, 3 pennies', $result);
        }
        //
        // function test_change_quarter()
        // {
        //     //Arrange
        //     $test_change = new Coin();
        //     $input =;
        //
        //     //Act
        //     $result = $test_change->changeDue($input);
        //
        //     //Assert
        //     $this->assertEquals(.., $result);
        // }
        //
        // function test_change_dollar()
        // {
        //     //Arrange
        //     $test_change = new Coin();
        //     $input =;
        //
        //     //Act
        //     $result = $test_change->changeDue($input);
        //
        //     //Assert
        //     $this->assertEquals(.., $result);
        // }
    }
 ?>
