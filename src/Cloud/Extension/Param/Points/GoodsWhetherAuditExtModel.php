<?php

namespace Com\Youzan\Cloud\Extension\Param\Points;



/**
 * 返回数据
 * @author Baymax
 * @create Mon May 09 21:08:54 CST 2022
 */
class GoodsWhetherAuditExtModel implements \JsonSerializable {

    /**
     * 需要审核的商品ID列表
     * @var array
     */
    private $itemIdList;

    /**
     * 是否需要审核
     * @var bool
     */
    private $needVerify;



    /**
     * @return array
     */
    public function getItemIdList(): ?array
    {
        return $this->itemIdList;
    }

    /**
     * @param array $itemIdList
     */
    public function setItemIdList(?array $itemIdList): void
    {
        $this->itemIdList = $itemIdList;
    }

    /**
     * @return bool
     */
    public function getNeedVerify(): ?bool
    {
        return $this->needVerify;
    }

    /**
     * @param bool $needVerify
     */
    public function setNeedVerify(?bool $needVerify): void
    {
        $this->needVerify = $needVerify;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}