<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2018-09-12 17:04:23.0
 */
class FansUnionidCreateDTO implements \JsonSerializable {

    /**
     * 获取时间，时间戳
     * @var string
     */
    private $dataTime;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 公众号或小程序id
     * @var int
     */
    private $mpId;

    /**
     * 粉丝标识
     * @var int
     */
    private $fansId;

    /**
     * 微信全局标识
     * @var string
     */
    private $unionId;



    /**
     * @return string
     */
    public function getDataTime(): string
    {
        return $this->dataTime;
    }

    /**
     * @param string $dataTime
     */
    public function setDataTime(string $dataTime): void
    {
        $this->dataTime = $dataTime;
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
    public function getMpId(): int
    {
        return $this->mpId;
    }

    /**
     * @param int $mpId
     */
    public function setMpId(int $mpId): void
    {
        $this->mpId = $mpId;
    }

    /**
     * @return int
     */
    public function getFansId(): int
    {
        return $this->fansId;
    }

    /**
     * @param int $fansId
     */
    public function setFansId(int $fansId): void
    {
        $this->fansId = $fansId;
    }

    /**
     * @return string
     */
    public function getUnionId(): string
    {
        return $this->unionId;
    }

    /**
     * @param string $unionId
     */
    public function setUnionId(string $unionId): void
    {
        $this->unionId = $unionId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}