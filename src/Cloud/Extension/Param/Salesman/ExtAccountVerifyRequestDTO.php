<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create 2019-04-12 20:34:00.0
 */
class ExtAccountVerifyRequestDTO implements \JsonSerializable {

    /**
     * 每个分销员的用户id
     * @var array
     */
    private $buyerIds;

    /**
     * 店铺id 上云用于判断业务身份
     * @var int
     */
    private $kdtId;

    /**
     * 每个分销员用户标识
     * @var array
     */
    private $yzOpenIds;



    /**
     * @return array
     */
    public function getBuyerIds(): array
    {
        return $this->buyerIds;
    }

    /**
     * @param array $buyerIds
     */
    public function setBuyerIds(array $buyerIds): void
    {
        $this->buyerIds = $buyerIds;
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
     * @return array
     */
    public function getYzOpenIds(): array
    {
        return $this->yzOpenIds;
    }

    /**
     * @param array $yzOpenIds
     */
    public function setYzOpenIds(array $yzOpenIds): void
    {
        $this->yzOpenIds = $yzOpenIds;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}