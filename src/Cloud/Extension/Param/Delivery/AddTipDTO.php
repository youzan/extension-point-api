<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 * 
 * @author Baymax
 * @create 2019-09-19 17:27:24.0
 */
class AddTipDTO implements \JsonSerializable {

    /**
     * 店铺Id
     * @var int
     */
    private $kdtId;

    /**
     * 物流订单号
     * @var string
     */
    private $orderOriginalId;

    /**
     * 小费金额，单位(分)
     * @var int
     */
    private $tip;



    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getOrderOriginalId(): string
    {
        return $this->orderOriginalId;
    }

    /**
     * @param string $orderOriginalId
     */
    public function setOrderOriginalId(string $orderOriginalId): void
    {
        $this->orderOriginalId = $orderOriginalId;
    }

    /**
     * @return int
     */
    public function getTip(): int
    {
        return $this->tip;
    }

    /**
     * @param int $tip
     */
    public function setTip(int $tip): void
    {
        $this->tip = $tip;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}