<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 * 
 * @author Baymax
 * @create Wed Jul 29 19:10:31 CST 2020
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}