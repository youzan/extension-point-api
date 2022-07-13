<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 调账请求参数
 * @author Baymax
 * @create Wed Mar 02 20:53:36 CST 2022
 */
class CustomerExtSingleAdjustmentRequest implements \JsonSerializable {

    /**
     * 调账用户id
     * @var string
     */
    private $yzOpenId;

    /**
     * 调账用户手机号
     * @var string
     */
    private $userPhone;

    /**
     * 调账卡号
     * @var string
     */
    private $cardNo;

    /**
     * 调账请求id
     * @var string
     */
    private $requestId;

    /**
     * 调账前本金-分
     * @var int
     */
    private $originalPrincipal;

    /**
     * 调账前赠送金-分
     * @var int
     */
    private $originalBonus;

    /**
     * 本次调账本金-分
     * @var int
     */
    private $adjustPrincipal;

    /**
     * 本次调账赠送金-分
     * @var int
     */
    private $adjustBonus;

    /**
     * 调账类型：ADD 调增 SUBTRACT 调减
     * @var string
     */
    private $bizType;

    /**
     * 操作人信息
     * @var string
     */
    private $operator;

    /**
     * 调账说明
     * @var string
     */
    private $remark;

    /**
     * 调账店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 调账总店id
     * @var int
     */
    private $rootKdtId;



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
    public function getUserPhone(): ?string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(?string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    /**
     * @return string
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(?string $cardNo): void
    {
        $this->cardNo = $cardNo;
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

    /**
     * @return int
     */
    public function getOriginalPrincipal(): ?int
    {
        return $this->originalPrincipal;
    }

    /**
     * @param int $originalPrincipal
     */
    public function setOriginalPrincipal(?int $originalPrincipal): void
    {
        $this->originalPrincipal = $originalPrincipal;
    }

    /**
     * @return int
     */
    public function getOriginalBonus(): ?int
    {
        return $this->originalBonus;
    }

    /**
     * @param int $originalBonus
     */
    public function setOriginalBonus(?int $originalBonus): void
    {
        $this->originalBonus = $originalBonus;
    }

    /**
     * @return int
     */
    public function getAdjustPrincipal(): ?int
    {
        return $this->adjustPrincipal;
    }

    /**
     * @param int $adjustPrincipal
     */
    public function setAdjustPrincipal(?int $adjustPrincipal): void
    {
        $this->adjustPrincipal = $adjustPrincipal;
    }

    /**
     * @return int
     */
    public function getAdjustBonus(): ?int
    {
        return $this->adjustBonus;
    }

    /**
     * @param int $adjustBonus
     */
    public function setAdjustBonus(?int $adjustBonus): void
    {
        $this->adjustBonus = $adjustBonus;
    }

    /**
     * @return string
     */
    public function getBizType(): ?string
    {
        return $this->bizType;
    }

    /**
     * @param string $bizType
     */
    public function setBizType(?string $bizType): void
    {
        $this->bizType = $bizType;
    }

    /**
     * @return string
     */
    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator(?string $operator): void
    {
        $this->operator = $operator;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
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