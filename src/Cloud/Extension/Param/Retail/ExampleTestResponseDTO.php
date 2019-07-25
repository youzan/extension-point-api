<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}