<?php

namespace Com\Youzan\Cloud\Extension\Param\Points;



/**
 * 商品相关信息
 * @author Baymax
 * @create Mon May 09 21:08:54 CST 2022
 */
class GoodsWhetherAuditExtItemInfo implements \JsonSerializable {

    /**
     * 商品ID
     * @var int
     */
    private $itemId;

    /**
     * 店铺组织ID，订购云上专柜插件后在商品发布时可编辑该字段。搜索组织的API：https://doc.youzanyun.com/detail/API/0/3696
     * @var int
     */
    private $shopOrgId;



    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getShopOrgId(): ?int
    {
        return $this->shopOrgId;
    }

    /**
     * @param int $shopOrgId
     */
    public function setShopOrgId(?int $shopOrgId): void
    {
        $this->shopOrgId = $shopOrgId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}