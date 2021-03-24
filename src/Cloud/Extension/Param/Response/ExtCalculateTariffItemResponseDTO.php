<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 商品列表
 * @author Baymax
 * @create 2020-12-24 11:30:20.0
 */
class ExtCalculateTariffItemResponseDTO implements \JsonSerializable {

    /**
     * 商品条目id
     * @var int
     */
    private $orderItemId;

    /**
     * 商品税费，单位为分
     * @var int
     */
    private $goodsTariff;

    /**
     * 运费税费，单位为分
     * @var int
     */
    private $postageTariff;



    /**
     * @return int
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(?int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return int
     */
    public function getGoodsTariff(): ?int
    {
        return $this->goodsTariff;
    }

    /**
     * @param int $goodsTariff
     */
    public function setGoodsTariff(?int $goodsTariff): void
    {
        $this->goodsTariff = $goodsTariff;
    }

    /**
     * @return int
     */
    public function getPostageTariff(): ?int
    {
        return $this->postageTariff;
    }

    /**
     * @param int $postageTariff
     */
    public function setPostageTariff(?int $postageTariff): void
    {
        $this->postageTariff = $postageTariff;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}