<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 请求体对象
 * @author Baymax
 * @create Wed Aug 30 16:50:08 CST 2023
 */
class ListTagGroupByGuideDTO implements \JsonSerializable {

    /**
     *  员工yz_open_id
     * @var int
     */
    private $yzOpenId;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;



    /**
     * @return int
     */
    public function getYzOpenId(): ?int
    {
        return $this->yzOpenId;
    }

    /**
     * @param int $yzOpenId
     */
    public function setYzOpenId(?int $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}