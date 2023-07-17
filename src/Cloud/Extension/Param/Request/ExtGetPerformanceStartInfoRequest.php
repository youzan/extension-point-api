<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 获取业绩开始统计时间相关信息请求
 * @author Baymax
 * @create Mon Jul 10 16:38:42 CST 2023
 */
class ExtGetPerformanceStartInfoRequest implements \JsonSerializable {

    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 总店ID
     * @var int
     */
    private $rootKdtId;



    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}