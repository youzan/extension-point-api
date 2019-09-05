<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;

use StdClass;

/**
 * 执行结果
 * @author Baymax
 * @create 2018-09-17 21:46:05.0
 */
class BizTestResponse implements \JsonSerializable {

    /**
     * 执行字符串结果
     * @var stdClass
     */
    private $content;

    /**
     * 请求id
     * @var int
     */
    private $requestId;



    /**
     * @return stdClass
     */
    public function getContent(): stdClass
    {
        return $this->content;
    }

    /**
     * @param stdClass $content
     */
    public function setContent(stdClass $content): void
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