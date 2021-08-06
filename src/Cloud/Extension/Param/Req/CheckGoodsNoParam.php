<?php

namespace Com\Youzan\Cloud\Extension\Param\Req;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-08-06 11:24:17.0
 */
class CheckGoodsNoParam implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 是否虚拟商品 1:是， 0:否
     * @var int
     */
    private $isVirtual;

    /**
     * 商品类型: 0 默认类型，1 拍卖 10 分销
     * @var int
     */
    private $goodsType;

    /**
     * 业务code
     * @var string
     */
    private $markCode;

    /**
     * 商品id，创建商品时itemId为空; 更新时需要携带, 否则可能校验失败
     * @var int
     */
    private $itemId;

    /**
     * 商品编码
     * @var string
     */
    private $goodsNo;

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
    public function getIsVirtual(): ?int
    {
        return $this->isVirtual;
    }

    /**
     * @param int $isVirtual
     */
    public function setIsVirtual(?int $isVirtual): void
    {
        $this->isVirtual = $isVirtual;
    }

    /**
     * @return int
     */
    public function getGoodsType(): ?int
    {
        return $this->goodsType;
    }

    /**
     * @param int $goodsType
     */
    public function setGoodsType(?int $goodsType): void
    {
        $this->goodsType = $goodsType;
    }

    /**
     * @return string
     */
    public function getMarkCode(): ?string
    {
        return $this->markCode;
    }

    /**
     * @param string $markCode
     */
    public function setMarkCode(?string $markCode): void
    {
        $this->markCode = $markCode;
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
    public function getGoodsNo(): ?string
    {
        return $this->goodsNo;
    }

    /**
     * @param string $goodsNo
     */
    public function setGoodsNo(?string $goodsNo): void
    {
        $this->goodsNo = $goodsNo;
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