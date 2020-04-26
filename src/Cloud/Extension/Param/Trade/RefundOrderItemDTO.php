<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 历史退款的商品
 * @author Baymax
 * @create Wed Jul 24 13:31:29 CST 2019
 */
class RefundOrderItemDTO implements \JsonSerializable {

    /**
     * 退款的商品项标识
     * @var int
     */
    private $itemId;

    /**
     * 退款金额
     * @var int
     */
    private $refundFee;

    /**
     * 邮费
     * @var int
     */
    private $postage;

    /**
     * 退款的商品数量
     * @var int
     */
    private $num;

    /**
     * 商品退还的重量
     * @var int
     */
    private $weight;



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
    public function getRefundFee(): int
    {
        return $this->refundFee;
    }

    /**
     * @param int $refundFee
     */
    public function setRefundFee(int $refundFee): void
    {
        $this->refundFee = $refundFee;
    }

    /**
     * @return int
     */
    public function getPostage(): int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(int $postage): void
    {
        $this->postage = $postage;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}