<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use DateTime;
use StdClass;

/**
 * 
 * @author Baymax
 * @create Wed Jul 24 16:20:39 CST 2019
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
     * @var string
     */
    private $testString2;

    /**
     * 测试boolean
     * @var bool
     */
    private $testBoolean;

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
     * 
     * @var stdClass
     */
    private $extttMap;



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
     * @return string
     */
    public function getTestString2(): string
    {
        return $this->testString2;
    }

    /**
     * @param string $testString2
     */
    public function setTestString2(string $testString2): void
    {
        $this->testString2 = $testString2;
    }

    /**
     * @return bool
     */
    public function getTestBoolean(): bool
    {
        return $this->testBoolean;
    }

    /**
     * @param bool $testBoolean
     */
    public function setTestBoolean(bool $testBoolean): void
    {
        $this->testBoolean = $testBoolean;
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

    /**
     * @return stdClass
     */
    public function getExtttMap(): stdClass
    {
        return $this->extttMap;
    }

    /**
     * @param stdClass $extttMap
     */
    public function setExtttMap(stdClass $extttMap): void
    {
        $this->extttMap = $extttMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}