<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 *  
 * @author Baymax
 * @create Fri Oct 27 14:43:07 CST 2023
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
     * @var string
     */
    private $yzOpenId;

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
     * 总部店铺Id，若为单店，则该值为当前店铺Id
     * @var int
     */
    private $rootKdtId;

    /**
     * 核销码
     * @var string
     */
    private $verifyCode;

    /**
     * 请求id
     * @var string
     */
    private $requestId;



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
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
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

    /**
     * @return string
     */
    public function getVerifyCode(): ?string
    {
        return $this->verifyCode;
    }

    /**
     * @param string $verifyCode
     */
    public function setVerifyCode(?string $verifyCode): void
    {
        $this->verifyCode = $verifyCode;
    }

    /**
     * @return string
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}