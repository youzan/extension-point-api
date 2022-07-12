<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\GoodsIdentityDTO;

/**
 * 商品信息
 * @author Baymax
 * @create Mon Mar 14 17:00:42 CST 2022
 */
class GoodsDTO implements \JsonSerializable {

    /**
     * 商品明细
     * @var GoodsIdentityDTO
     */
    private $goodsIdentity;

    /**
     * 商品原价，单位：分
     * @var int
     */
    private $price;

    /**
     * 商品实付金额，是经过有赞营销计算均摊后，单位：分
     * @var int
     */
    private $pay;

    /**
     * 商品数量
     * @var int
     */
    private $num;



    /**
     * @return GoodsIdentityDTO
     */
    public function getGoodsIdentity(): ?GoodsIdentityDTO
    {
        return $this->goodsIdentity;
    }

    /**
     * @param GoodsIdentityDTO $goodsIdentity
     */
    public function setGoodsIdentity(?GoodsIdentityDTO $goodsIdentity): void
    {
        $this->goodsIdentity = $goodsIdentity;
    }

    /**
     * @return int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getPay(): ?int
    {
        return $this->pay;
    }

    /**
     * @param int $pay
     */
    public function setPay(?int $pay): void
    {
        $this->pay = $pay;
    }

    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}