<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use StdClass;

/**
 * 
 * @author Baymax
 * @create Thu Jan 16 19:48:24 CST 2020
 */
class BizTestRequestDTO implements \JsonSerializable {

    /**
     * 
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
     * @var string
     */
    private $message;

    /**
     * 
     * @var stdClass
     */
    private $extMap;



    /**
     * @return int
     */
    public function getRequestId(): ?int
    {
        return $this->requestId;
    }

    /**
     * @param int $requestId
     */
    public function setRequestId(?int $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return stdClass
     */
    public function getExtMap(): ?stdClass
    {
        return $this->extMap;
    }

    /**
     * @param stdClass $extMap
     */
    public function setExtMap(?stdClass $extMap): void
    {
        $this->extMap = $extMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}