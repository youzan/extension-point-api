<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use DateTime;
use StdClass;

/**
 * 
 * @author Baymax
 * @create Wed Jul 24 16:20:39 CST 2019
 */
class ExampleTestResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $responseCode;

    /**
     * 
     * @var array
     */
    private $responseString;

    /**
     * 
     * @var DateTime
     */
    private $responseDate;

    /**
     * 
     * @var stdClass
     */
    private $extttMap1221312;



    /**
     * @return int
     */
    public function getResponseCode(): int
    {
        return $this->responseCode;
    }

    /**
     * @param int $responseCode
     */
    public function setResponseCode(int $responseCode): void
    {
        $this->responseCode = $responseCode;
    }

    /**
     * @return array
     */
    public function getResponseString(): array
    {
        return $this->responseString;
    }

    /**
     * @param array $responseString
     */
    public function setResponseString(array $responseString): void
    {
        $this->responseString = $responseString;
    }

    /**
     * @return DateTime
     */
    public function getResponseDate(): DateTime
    {
        return $this->responseDate;
    }

    /**
     * @param DateTime $responseDate
     */
    public function setResponseDate(DateTime $responseDate): void
    {
        $this->responseDate = $responseDate;
    }

    /**
     * @return stdClass
     */
    public function getExtttMap1221312(): stdClass
    {
        return $this->extttMap1221312;
    }

    /**
     * @param stdClass $extttMap1221312
     */
    public function setExtttMap1221312(stdClass $extttMap1221312): void
    {
        $this->extttMap1221312 = $extttMap1221312;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}