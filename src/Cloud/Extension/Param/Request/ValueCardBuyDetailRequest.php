<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 10:56:53.0
 */
class ValueCardBuyDetailRequest implements \JsonSerializable {

    /**
     * 用户有赞开放ID
     * @var string
     */
    private $buyerId;

    /**
     * SPU编号（商品级别）
     * @var string
     */
    private $productSpuNo;



    /**
     * @return string
     */
    public function getBuyerId(): string
    {
        return $this->buyerId;
    }

    /**
     * @param string $buyerId
     */
    public function setBuyerId(string $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getProductSpuNo(): string
    {
        return $this->productSpuNo;
    }

    /**
     * @param string $productSpuNo
     */
    public function setProductSpuNo(string $productSpuNo): void
    {
        $this->productSpuNo = $productSpuNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}