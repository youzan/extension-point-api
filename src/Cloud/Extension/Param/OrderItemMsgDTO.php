<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\GoodsInfo;
use StdClass;
use Com\Youzan\Cloud\Extension\Param\SkuDTO;

/**
 * 子订单信息
 * @author Baymax
 * @create 2018-10-22 20:30:57.0
 */
class OrderItemMsgDTO implements \JsonSerializable {

    /**
     *  商品信息
     * @var GoodsInfo
     */
    private $goodsInfo;

    /**
     * 商品的额外信息
     * @var stdClass
     */
    private $extra;

    /**
     *  实付金额
     * @var int
     */
    private $realPay;

    /**
     *  标
     * @var stdClass
     */
    private $tags;

    /**
     *  限购数
     * @var int
     */
    private $quotaNum;

    /**
     * 购买数量
     * @var int
     */
    private $num;

    /**
     * 商品留言
     * @var string
     */
    private $memo;

    /**
     * 商品快照
     * @var string
     */
    private $snapShot;

    /**
     *  sku信息
     * @var SkuDTO
     */
    private $skuDTO;

    /**
     *  子订单id
     * @var int
     */
    private $id;



    /**
     * @return GoodsInfo
     */
    public function getGoodsInfo(): ?GoodsInfo
    {
        return $this->goodsInfo;
    }

    /**
     * @param GoodsInfo $goodsInfo
     */
    public function setGoodsInfo(?GoodsInfo $goodsInfo): void
    {
        $this->goodsInfo = $goodsInfo;
    }

    /**
     * @return stdClass
     */
    public function getExtra(): ?stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(?stdClass $extra): void
    {
        $this->extra = $extra;
    }

    /**
     * @return int
     */
    public function getRealPay(): ?int
    {
        return $this->realPay;
    }

    /**
     * @param int $realPay
     */
    public function setRealPay(?int $realPay): void
    {
        $this->realPay = $realPay;
    }

    /**
     * @return stdClass
     */
    public function getTags(): ?stdClass
    {
        return $this->tags;
    }

    /**
     * @param stdClass $tags
     */
    public function setTags(?stdClass $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return int
     */
    public function getQuotaNum(): ?int
    {
        return $this->quotaNum;
    }

    /**
     * @param int $quotaNum
     */
    public function setQuotaNum(?int $quotaNum): void
    {
        $this->quotaNum = $quotaNum;
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

    /**
     * @return string
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * @param string $memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * @return string
     */
    public function getSnapShot(): ?string
    {
        return $this->snapShot;
    }

    /**
     * @param string $snapShot
     */
    public function setSnapShot(?string $snapShot): void
    {
        $this->snapShot = $snapShot;
    }

    /**
     * @return SkuDTO
     */
    public function getSkuDTO(): ?SkuDTO
    {
        return $this->skuDTO;
    }

    /**
     * @param SkuDTO $skuDTO
     */
    public function setSkuDTO(?SkuDTO $skuDTO): void
    {
        $this->skuDTO = $skuDTO;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}