<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;

use Com\Youzan\Cloud\Extension\Param\Test\PreTestInnserParam;

/**
 * 
 * @author Baymax
 * @create 2019-09-05 10:09:24.0
 */
class PreTestRequestDTO implements \JsonSerializable {

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
     * @var PreTestInnserParam
     */
    private $param;



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
     * @return PreTestInnserParam
     */
    public function getParam(): PreTestInnserParam
    {
        return $this->param;
    }

    /**
     * @param PreTestInnserParam $param
     */
    public function setParam(PreTestInnserParam $param): void
    {
        $this->param = $param;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}