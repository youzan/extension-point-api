<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;
use DateTime;

/**
 *  
 * @author Baymax
 * @create Wed Jun 28 16:14:53 CST 2023
 */
class ThirdpartyVoucherSendExtPointRequest implements \JsonSerializable {

    /**
     * 当前店铺Id
     * @var int
     */
    private $kdtId;

    /**
     * 总部kdtId
     * @var int
     */
    private $hqKdtId;

    /**
     * 仅连锁店铺场景有效，发放优惠券的门店或网点的kdtId
     * @var int
     */
    private $nodeKdtId;

    /**
     * 三方活动id
     * @var int
     */
    private $thirdpartyActivityId;

    /**
     * 用户id
     * @var string
     */
    private $yzOpenId;

    /**
     * 发券业务名称（与requestId一起保证发放幂等）
     * @var string
     */
    private $bizName;

    /**
     * 请求id
     * @var string
     */
    private $requestId;

    /**
     * 扩展点版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展字段
     * @var stdClass
     */
    private $extMap;

    /**
     * 优惠类型：1现金；2折扣
     * @var int
     */
    private $preferentialMode;

    /**
     * 优惠券面额：现金券单位分，折扣券:百分比
     * @var int
     */
    private $value;

    /**
     * 发放来源;上游发券的来源,无枚举,有意义的英文
     * @var string
     */
    private $sendSource;

    /**
     * 有效开始时间；单位秒
     * @var int
     */
    private $validStartTime;

    /**
     * 有效结束时间，单位秒
     * @var int
     */
    private $validEndTime;

    /**
     * 内部活动id
     * @var int
     */
    private $voucherActivityId;

    /**
     * 核销码
     * @var string
     */
    private $verifyCode;



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
    public function getHqKdtId(): ?int
    {
        return $this->hqKdtId;
    }

    /**
     * @param int $hqKdtId
     */
    public function setHqKdtId(?int $hqKdtId): void
    {
        $this->hqKdtId = $hqKdtId;
    }

    /**
     * @return int
     */
    public function getNodeKdtId(): ?int
    {
        return $this->nodeKdtId;
    }

    /**
     * @param int $nodeKdtId
     */
    public function setNodeKdtId(?int $nodeKdtId): void
    {
        $this->nodeKdtId = $nodeKdtId;
    }

    /**
     * @return int
     */
    public function getThirdpartyActivityId(): ?int
    {
        return $this->thirdpartyActivityId;
    }

    /**
     * @param int $thirdpartyActivityId
     */
    public function setThirdpartyActivityId(?int $thirdpartyActivityId): void
    {
        $this->thirdpartyActivityId = $thirdpartyActivityId;
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
    public function getBizName(): ?string
    {
        return $this->bizName;
    }

    /**
     * @param string $bizName
     */
    public function setBizName(?string $bizName): void
    {
        $this->bizName = $bizName;
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
    public function getPreferentialMode(): ?int
    {
        return $this->preferentialMode;
    }

    /**
     * @param int $preferentialMode
     */
    public function setPreferentialMode(?int $preferentialMode): void
    {
        $this->preferentialMode = $preferentialMode;
    }

    /**
     * @return int
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(?int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getSendSource(): ?string
    {
        return $this->sendSource;
    }

    /**
     * @param string $sendSource
     */
    public function setSendSource(?string $sendSource): void
    {
        $this->sendSource = $sendSource;
    }

    /**
     * @return int
     */
    public function getValidStartTime(): ?int
    {
        return $this->validStartTime;
    }

    /**
     * @param int $validStartTime
     */
    public function setValidStartTime(?int $validStartTime): void
    {
        $this->validStartTime = $validStartTime;
    }

    /**
     * @return int
     */
    public function getValidEndTime(): ?int
    {
        return $this->validEndTime;
    }

    /**
     * @param int $validEndTime
     */
    public function setValidEndTime(?int $validEndTime): void
    {
        $this->validEndTime = $validEndTime;
    }

    /**
     * @return int
     */
    public function getVoucherActivityId(): ?int
    {
        return $this->voucherActivityId;
    }

    /**
     * @param int $voucherActivityId
     */
    public function setVoucherActivityId(?int $voucherActivityId): void
    {
        $this->voucherActivityId = $voucherActivityId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}