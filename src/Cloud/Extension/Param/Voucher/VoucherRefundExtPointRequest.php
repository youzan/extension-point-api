<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2020-02-12 16:36:12.0
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
     * 用户id
     * @var int
     */
    private $userId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单号来源: YZ_TRADE 有赞订单号
     * @var string
     */
    private $orderNoSource;

    /**
     * 
     * @var stdClass
     */
    private $extMap;

    /**
     * 
     * @var int
     */
    private $versionNo;



    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getOrderNoSource(): string
    {
        return $this->orderNoSource;
    }

    /**
     * @param string $orderNoSource
     */
    public function setOrderNoSource(string $orderNoSource): void
    {
        $this->orderNoSource = $orderNoSource;
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

    /**
     * @return int
     */
    public function getVersionNo(): int
    {
        return $this->versionNo;
    }

    /**
     * @param int $versionNo
     */
    public function setVersionNo(int $versionNo): void
    {
        $this->versionNo = $versionNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}