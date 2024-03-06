<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 * 扩展点请求
 * @author Baymax
 * @create Tue Jan 11 19:38:05 CST 2022
 */
class VoucherVerifyCheckExtPointRequest implements \JsonSerializable {

    /**
     * 总店店铺id
     * @var int
     */
    private $rootKdtId;

    /**
     * 核销店铺id
     * @var int
     */
    private $verifyKdtId;

    /**
     * 有赞活动id
     * @var int
     */
    private $activityId;

    /**
     * 用户id
     * @var string
     */
    private $yzOpenId;

    /**
     * 核销码
     * @var string
     */
    private $verifyCode;

    /**
     * 版本号
     * @var int
     */
    private $versionNo;

    /**
     * 扩展信息
     * @var stdClass
     */
    private $extMap;



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
    public function getVerifyKdtId(): ?int
    {
        return $this->verifyKdtId;
    }

    /**
     * @param int $verifyKdtId
     */
    public function setVerifyKdtId(?int $verifyKdtId): void
    {
        $this->verifyKdtId = $verifyKdtId;
    }

    /**
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     */
    public function setActivityId(?int $activityId): void
    {
        $this->activityId = $activityId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}