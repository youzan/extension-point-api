<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2019-07-24 16:20:39.0
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}