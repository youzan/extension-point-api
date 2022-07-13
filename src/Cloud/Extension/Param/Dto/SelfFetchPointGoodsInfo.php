<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\SelfFetchPointGoodsSkuInfo;

/**
 * 自提点下单页商品详情信息
 * @author Baymax
 * @create Mon Jun 13 14:59:18 CST 2022
 */
class SelfFetchPointGoodsInfo implements \JsonSerializable {

    /**
     * 商品ID
     * @var int
     */
    private $item_id;

    /**
     * 商品名称
     * @var string
     */
    private $title;

    /**
     * 商品数量
     * @var int
     */
    private $item_num;

    /**
     * 商品的sku信息
     * @var array
     */
    private $sku_infos;

    /**
     * 商品编码，商家自定义参数，支持英文和数字组合
     * @var string
     */
    private $item_no;



    /**
     * @return int
     */
    public function getItem_id(): ?int
    {
        return $this->item_id;
    }

    /**
     * @param int $item_id
     */
    public function setItem_id(?int $item_id): void
    {
        $this->item_id = $item_id;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getItem_num(): ?int
    {
        return $this->item_num;
    }

    /**
     * @param int $item_num
     */
    public function setItem_num(?int $item_num): void
    {
        $this->item_num = $item_num;
    }

    /**
     * @return array
     */
    public function getSku_infos(): ?array
    {
        return $this->sku_infos;
    }

    /**
     * @param array $sku_infos
     */
    public function setSku_infos(?array $sku_infos): void
    {
        $this->sku_infos = $sku_infos;
    }

    /**
     * @return string
     */
    public function getItem_no(): ?string
    {
        return $this->item_no;
    }

    /**
     * @param string $item_no
     */
    public function setItem_no(?string $item_no): void
    {
        $this->item_no = $item_no;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}