<?php

namespace Com\Youzan\Cloud\Extension\Param\CustomerExtValueCardsQueryRequest;



/**
 * 商品信息列表
 * @author Baymax
 * @create Tue Jun 21 16:04:02 CST 2022
 */
class ItemContext implements \JsonSerializable {

    /**
     * 商品ID
     * @var int
     */
    private $itemId;

    /**
     * 是否为外部商品，非有赞IC商品设置为true
     * @var bool
     */
    private $outside;

    /**
     * 是否是赠品，赠品为true，非赠品为false
     * @var bool
     */
    private $giveaway;



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
     * @return bool
     */
    public function getOutside(): ?bool
    {
        return $this->outside;
    }

    /**
     * @param bool $outside
     */
    public function setOutside(?bool $outside): void
    {
        $this->outside = $outside;
    }

    /**
     * @return bool
     */
    public function getGiveaway(): ?bool
    {
        return $this->giveaway;
    }

    /**
     * @param bool $giveaway
     */
    public function setGiveaway(?bool $giveaway): void
    {
        $this->giveaway = $giveaway;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}