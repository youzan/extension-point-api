<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\TicketSkuDTO;
use Com\Youzan\Cloud\Extension\Param\GoodsInfo;

/**
 *  
 * @author Baymax
 * @create Wed Apr 27 17:15:30 CST 2022
 */
class TicketOrderItem implements \JsonSerializable {

    /**
     * 子单号
     * @var int
     */
    private $itemId;

    /**
     * 商品sku信息
     * @var TicketSkuDTO
     */
    private $sku;

    /**
     * 购买数量
     * @var int
     */
    private $num;

    /**
     * 用户填写的商品留言
     * @var string
     */
    private $memo;

    /**
     * 商品信息
     * @var GoodsInfo
     */
    private $goodsInfo;



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
     * @return TicketSkuDTO
     */
    public function getSku(): ?TicketSkuDTO
    {
        return $this->sku;
    }

    /**
     * @param TicketSkuDTO $sku
     */
    public function setSku(?TicketSkuDTO $sku): void
    {
        $this->sku = $sku;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}