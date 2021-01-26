<?php

namespace Com\Youzan\Cloud\Extension\Param\Ump;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-08-28 17:46:24.0
 */
class VoucherRefundExtPointRequest implements \JsonSerializable {

    /**
     * 外部券id
     * @var int
     */
    private $id;

    /**
     * 有赞店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 下单用户id
     * @var int
     */
    private $buyerId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单号来源 YZ_TRADE 有赞订单号
     * @var string
     */
    private $orderNoSource;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extMap;

    /**
     * 扩展点版本
     * @var int
     */
    private $versionNo;



    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
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
    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(?int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

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
     * @return string
     */
    public function getOrderNoSource(): ?string
    {
        return $this->orderNoSource;
    }

    /**
     * @param string $orderNoSource
     */
    public function setOrderNoSource(?string $orderNoSource): void
    {
        $this->orderNoSource = $orderNoSource;
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

    /**
     * @return int
     */
    public function getVersionNo(): ?int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(?int $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}