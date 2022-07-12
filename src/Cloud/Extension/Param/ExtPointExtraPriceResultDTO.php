<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 订单级额外费用 (包含在订单是否金额里面)，订单级额外费用JSON字符串限制500个字符
 * @author Baymax
 * @create Wed Feb 23 17:15:19 CST 2022
 */
class ExtPointExtraPriceResultDTO implements \JsonSerializable {

    /**
     * 附加费用名称 (限制15个字符)
     * @var string
     */
    private $name;

    /**
     * 附加费用描述 (限制15个字符)
     * @var string
     */
    private $desc;

    /**
     * 附加费用金额（单位分）
     * @var int
     */
    private $price;

    /**
     * 是否可退款 (仅订单级有效，商品级一定可退)
     * @var bool
     */
    private $refundable;



    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     */
    public function setDesc(?string $desc): void
    {
        $this->desc = $desc;
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
     * @return bool
     */
    public function getRefundable(): ?bool
    {
        return $this->refundable;
    }

    /**
     * @param bool $refundable
     */
    public function setRefundable(?bool $refundable): void
    {
        $this->refundable = $refundable;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}