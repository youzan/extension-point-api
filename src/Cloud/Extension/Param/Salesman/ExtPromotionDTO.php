<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtOrderItemPrice;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtOrderPriceChangeLog;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtOrderItemPriceChangeLog;

/**
 * 优惠信息
 * @author Baymax
 * @create 2019-12-12 09:29:19.0
 */
class ExtPromotionDTO implements \JsonSerializable {

    /**
     * 商品明细
     * @var array
     */
    private $extOrderItemPrice;

    /**
     * 
     * @var array
     */
    private $extOrderPriceChangeLog;

    /**
     * 
     * @var array
     */
    private $extOrderItemPriceChangeLog;



    /**
     * @return array
     */
    public function getExtOrderItemPrice(): ?array
    {
        return $this->extOrderItemPrice;
    }

    /**
     * @param array $extOrderItemPrice
     */
    public function setExtOrderItemPrice(?array $extOrderItemPrice): void
    {
        $this->extOrderItemPrice = $extOrderItemPrice;
    }

    /**
     * @return array
     */
    public function getExtOrderPriceChangeLog(): ?array
    {
        return $this->extOrderPriceChangeLog;
    }

    /**
     * @param array $extOrderPriceChangeLog
     */
    public function setExtOrderPriceChangeLog(?array $extOrderPriceChangeLog): void
    {
        $this->extOrderPriceChangeLog = $extOrderPriceChangeLog;
    }

    /**
     * @return array
     */
    public function getExtOrderItemPriceChangeLog(): ?array
    {
        return $this->extOrderItemPriceChangeLog;
    }

    /**
     * @param array $extOrderItemPriceChangeLog
     */
    public function setExtOrderItemPriceChangeLog(?array $extOrderItemPriceChangeLog): void
    {
        $this->extOrderItemPriceChangeLog = $extOrderItemPriceChangeLog;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}