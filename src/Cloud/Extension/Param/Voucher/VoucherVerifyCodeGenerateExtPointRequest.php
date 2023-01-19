<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 *  
 * @author Baymax
 * @create Tue Aug 30 15:52:17 CST 2022
 */
class VoucherVerifyCodeGenerateExtPointRequest implements \JsonSerializable {

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
     * 内部活动Id
     * @var int
     */
    private $activityId;

    /**
     * 生成券数量
     * @var int
     */
    private $generateNum;

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
     * 码值
     * @var string
     */
    private $codeValue;

    /**
     * 请求Id，用来保证幂等
     * @var string
     */
    private $requestId;

    /**
     * 用户Id
     * @var string
     */
    private $yzOpenId;



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
     * @return int
     */
    public function getGenerateNum(): ?int
    {
        return $this->generateNum;
    }

    /**
     * @param int $generateNum
     */
    public function setGenerateNum(?int $generateNum): void
    {
        $this->generateNum = $generateNum;
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
     * @return string
     */
    public function getCodeValue(): ?string
    {
        return $this->codeValue;
    }

    /**
     * @param string $codeValue
     */
    public function setCodeValue(?string $codeValue): void
    {
        $this->codeValue = $codeValue;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}