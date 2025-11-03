<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;
use DateTime;

/**
 *  
 * @author Baymax
 * @create Fri Aug 22 11:21:12 CST 2025
 */
class ThirdpartyVoucherBatchSendExtPointRequest implements \JsonSerializable {

    /**
     * 当前店铺Id
     * @var int
     */
    private $kdtId;

    /**
     * 总部店铺Id，如果是单店不是连锁，该字段为空
     * @var int
     */
    private $rootKdtId;

    /**
     * 外部活动Id
     * @var int
     */
    private $thirdpartyActivityId;

    /**
     * 活动发放数量
     * @var int
     */
    private $sendNum;

    /**
     * 用户id
     * @var string
     */
    private $yzOpenId;

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
     *  
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
     * @return int
     */
    public function getSendNum(): ?int
    {
        return $this->sendNum;
    }

    /**
     * @param int $sendNum
     */
    public function setSendNum(?int $sendNum): void
    {
        $this->sendNum = $sendNum;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}