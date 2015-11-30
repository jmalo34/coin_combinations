<?php
    require_once "src/Coin.php";

    class CoinTest extends PHPUnit_Framework_TestCase
    {
        function test_change_1()
        {
            //Arrange
            $test_change = new Coin();
            $input = ;

            //Act
            $result = $test_change->change($input);

            //Assert
            $this->assertEquals('', $result);
        }

        function test_change_2()
        {
            //Arrange
            $test_change = new Coin();
            $input =;

            //Act
            $result = $test_change->change($input);

            //Assert
            $this->assertEquals('', $result);
        }
    }
 ?>
