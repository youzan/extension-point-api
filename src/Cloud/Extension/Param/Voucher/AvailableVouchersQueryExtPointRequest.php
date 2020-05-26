<?php

namespace Com\Youzan\Cloud\Extension\Param\Voucher;

use StdClass;

/**
 * 
 * @author Baymax
 * @create Wed Feb 12 16:35:41 CST 2020
 */
class AvailableVouchersQueryExtPointRequest implements \JsonSerializable {

    /**
     * 券归属人id
     * @var string
     */
    private $yzOpenId;

    /**
     * 外部券活动id列表
     * @var array
     */
    private $activityIds;

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
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return array
     */
    public function getActivityIds(): array
    {
        return $this->activityIds;
    }

    /**
     * @param array $activityIds
     */
    public function setActivityIds(array $activityIds): void
    {
        $this->activityIds = $activityIds;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}