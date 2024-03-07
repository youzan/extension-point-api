<?php

namespace Com\Youzan\Cloud\Extension\Param\Cps;

use StdClass;

/**
 * 请求参数
 * @author Baymax
 * @create Thu May 18 19:21:52 CST 2023
 */
class ExtAttributionRequest implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extra;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;



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
     * @return stdClass
     */
    public function getExtra(): ?stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(?stdClass $extra): void
    {
        $this->extra = $extra;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}