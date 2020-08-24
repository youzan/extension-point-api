<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 发货商品信息
 * @author Baymax
 * @create 2020-08-19 16:02:23.0
 */
class DeliveryItemMsgDTO implements \JsonSerializable {

    /**
     * 订单商品Id
     * @var int
     */
    private $itemId;

    /**
     * 发货商品数量
     * @var int
     */
    private $num;

    /**
     * 发货商品重量
     * @var int
     */
    private $weight;

    /**
     * 商品发货补重量差价扩展字段:做快照用
     * @var string
     */
    private $extend;



    /**
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getExtend(): string
    {
        return $this->extend;
    }

    /**
     * @param string $extend
     */
    public function setExtend(string $extend): void
    {
        $this->extend = $extend;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}