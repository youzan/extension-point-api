<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 请求体对象
 * @author Baymax
 * @create Mon Sep 11 14:50:29 CST 2023
 */
class ListTagGroupByGuideDTO implements \JsonSerializable {

    /**
     *  员工yz_open_id
     * @var string
     */
    private $yzOpenId;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;



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