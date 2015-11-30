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
            $this->assertEquals('4 pennies', $result);
        }
        //
        // function test_change_nickel()
        // {
        //     //Arrange
        //     $test_change = new Coin();
        //     $input =;
        //
        //     //Act
        //     $result = $test_change->changeDue($input);
        //
        //     //Assert
        //     $this->assertEquals('', $result);
        // }
        //
        // function test_change_dime()
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
