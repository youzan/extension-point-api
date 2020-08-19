<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create Tue Mar 24 10:56:53 CST 2020
 */
class ValueCardBuyDetailRequest implements \JsonSerializable {

    /**
     * 用户有赞开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * SPU编号（商品级别,调用方生成,长度不得大于24）
     * @var string
     */
    private $productSpuNo;



    /**
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
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