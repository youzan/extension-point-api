<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-09-06 11:36:23.0
 */
class TestOneReq implements \JsonSerializable {

    /**
     * 111
     * @var int
     */
    private $requestId;

    /**
     * 
     * @var string
     */
    private $content;

    /**
     * 
     * @var stdClass
     */
    private $extMap;



    /**
     * @return int
     */
    public function getRequestId(): int
    {
        return $this->requestId;
    }

    /**
     * @param int $requestId
     */
    public function setRequestId(int $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}