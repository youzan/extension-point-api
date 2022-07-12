<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 *  
 * @author Baymax
 * @create Mon Mar 14 17:35:47 CST 2022
 */
class ItemContext implements \JsonSerializable {

    /**
     * 商品id
     * @var int
     */
    private $itemId;

    /**
     * 是否为外部商品，非有赞IC商品设置为true, 默认为IC商品
     * @var bool
     */
    private $outside;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}