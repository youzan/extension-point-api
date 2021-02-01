<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;

use Com\Youzan\Cloud\Extension\Param\Test\BizTestData;

/**
 * 请求对象
 * @author Baymax
 * @create Mon Sep 17 21:46:05 CST 2018
 */
class BizTestRequest implements \JsonSerializable {

    /**
     * 请求id
     * @var int
     */
    private $requestId;

    /**
     * 数据
     * @var BizTestData
     */
    private $data;



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
     * @return BizTestData
     */
    public function getData(): ?BizTestData
    {
        return $this->data;
    }

    /**
     * @param BizTestData $data
     */
    public function setData(?BizTestData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}