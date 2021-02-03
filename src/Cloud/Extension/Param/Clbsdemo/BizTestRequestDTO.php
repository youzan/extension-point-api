<?php

namespace Com\Youzan\Cloud\Extension\Param\Clbsdemo;



/**
 * 
 * @author Baymax
 * @create 2019-12-17 19:19:47.0
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}