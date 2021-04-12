<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 商品的sku信息
 * @author Baymax
 * @create 2021-03-29 20:13:54.0
 */
class SelfFetchPointGoodsSkuInfo implements \JsonSerializable {

    /**
     * 商品的skuID
     * @var int
     */
    private $sku_id;

    /**
     * 商品的sku规格编码
     * @var string
     */
    private $sku_no;



    /**
     * @return int
     */
    public function getSku_id(): ?int
    {
        return $this->sku_id;
    }

    /**
     * @param int $sku_id
     */
    public function setSku_id(?int $sku_id): void
    {
        $this->sku_id = $sku_id;
    }

    /**
     * @return string
     */
    public function getSku_no(): ?string
    {
        return $this->sku_no;
    }

    /**
     * @param string $sku_no
     */
    public function setSku_no(?string $sku_no): void
    {
        $this->sku_no = $sku_no;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}