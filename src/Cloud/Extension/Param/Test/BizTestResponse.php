<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;



/**
 * 执行结果
 * @author Baymax
 * @create 2018-09-17 21:46:05.0
 */
class BizTestResponse implements \JsonSerializable {

    /**
     * 执行字符串结果
     * @var string
     */
    private $content;

    /**
     * 请求id
     * @var int
     */
    private $requestId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}