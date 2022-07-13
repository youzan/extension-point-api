<?php

namespace Com\Youzan\Cloud\Extension\Param\Req;

use StdClass;

/**
 *  
 * @author Baymax
 * @create Mon Mar 14 16:59:06 CST 2022
 */
class CheckGoodsNoParam implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 商品id，创建商品时itemId为空; 更新时需要携带, 否则可能校验失败
     * @var int
     */
    private $itemId;

    /**
     * 商品编码
     * @var string
     */
    private $itemNo;

    /**
     * 商品条码
     * @var string
     */
    private $barCode;

    /**
     * 规格编码，以数字作为key（从0开始依次递增），value则为具体的规格编码值（无则为空）
     * @var stdClass
     */
    private $skuCodeMap;

    /**
     * 规格条码，以数字作为key（从0开始依次递增），value则为具体的规格条码值（无则为空）
     * @var stdClass
     */
    private $skuBarCodeMap;



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
     * @return string
     */
    public function getItemNo(): ?string
    {
        return $this->itemNo;
    }

    /**
     * @param string $itemNo
     */
    public function setItemNo(?string $itemNo): void
    {
        $this->itemNo = $itemNo;
    }

    /**
     * @return string
     */
    public function getBarCode(): ?string
    {
        return $this->barCode;
    }

    /**
     * @param string $barCode
     */
    public function setBarCode(?string $barCode): void
    {
        $this->barCode = $barCode;
    }

    /**
     * @return stdClass
     */
    public function getSkuCodeMap(): ?stdClass
    {
        return $this->skuCodeMap;
    }

    /**
     * @param stdClass $skuCodeMap
     */
    public function setSkuCodeMap(?stdClass $skuCodeMap): void
    {
        $this->skuCodeMap = $skuCodeMap;
    }

    /**
     * @return stdClass
     */
    public function getSkuBarCodeMap(): ?stdClass
    {
        return $this->skuBarCodeMap;
    }

    /**
     * @param stdClass $skuBarCodeMap
     */
    public function setSkuBarCodeMap(?stdClass $skuBarCodeMap): void
    {
        $this->skuBarCodeMap = $skuBarCodeMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}