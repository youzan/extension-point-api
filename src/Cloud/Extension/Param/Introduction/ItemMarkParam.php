<?php

namespace Com\Youzan\Cloud\Extension\Param\Introduction;



/**
 * 商品类型能力标属性集
 * @author Baymax
 * @create Tue Apr 04 17:41:46 CST 2023
 */
class ItemMarkParam implements \JsonSerializable {

    /**
     * 商品类型
     * @var int
     */
    private $goodsType;

    /**
     * 业务code
     * @var string
     */
    private $markCode;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}