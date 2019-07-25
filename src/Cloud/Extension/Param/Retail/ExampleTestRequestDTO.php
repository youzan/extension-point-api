<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2019-07-24 16:20:39.0
 */
class ExampleTestRequestDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $testString;

    /**
     * 
     * @var string
     */
    private $testString1;

    /**
     * 
     * @var int
     */
    private $testInt;

    /**
     * 
     * @var DateTime
     */
    private $testDate;

    /**
     * 
     * @var int
     */
    private $testLong;

    /**
     * 
     * @var int
     */
    private $testShort;



    /**
     * @return string
     */
    public function getTestString(): string
    {
        return $this->testString;
    }

    /**
     * @param string $testString
     */
    public function setTestString(string $testString): void
    {
        $this->testString = $testString;
    }

    /**
     * @return string
     */
    public function getTestString1(): string
    {
        return $this->testString1;
    }

    /**
     * @param string $testString1
     */
    public function setTestString1(string $testString1): void
    {
        $this->testString1 = $testString1;
    }

    /**
     * @return int
     */
    public function getTestInt(): int
    {
        return $this->testInt;
    }

    /**
     * @param int $testInt
     */
    public function setTestInt(int $testInt): void
    {
        $this->testInt = $testInt;
    }

    /**
     * @return DateTime
     */
    public function getTestDate(): DateTime
    {
        return $this->testDate;
    }

    /**
     * @param DateTime $testDate
     */
    public function setTestDate(DateTime $testDate): void
    {
        $this->testDate = $testDate;
    }

    /**
     * @return int
     */
    public function getTestLong(): int
    {
        return $this->testLong;
    }

    /**
     * @param int $testLong
     */
    public function setTestLong(int $testLong): void
    {
        $this->testLong = $testLong;
    }

    /**
     * @return int
     */
    public function getTestShort(): int
    {
        return $this->testShort;
    }

    /**
     * @param int $testShort
     */
    public function setTestShort(int $testShort): void
    {
        $this->testShort = $testShort;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}