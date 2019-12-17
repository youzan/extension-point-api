<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtOrderItemPrice;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtOrderPriceChangeLog;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtOrderItemPriceChangeLog;

/**
 * 优惠明细
 * @author Baymax
 * @create Thu Dec 12 09:29:19 CST 2019
 */
class ExtPromotionDTO implements \JsonSerializable {

    /**
     * 计价商品价格
     * @var array
     */
    private $extOrderItemPrice;

    /**
     * 计价订单级优惠
     * @var array
     */
    private $extOrderPriceChangeLog;

    /**
     * 计价商品级优惠
     * @var array
     */
    private $extOrderItemPriceChangeLog;



    /**
     * @return array
     */
    public function getExtOrderItemPrice(): array
    {
        return $this->extOrderItemPrice;
    }

    /**
     * @param array $extOrderItemPrice
     */
    public function setExtOrderItemPrice(array $extOrderItemPrice): void
    {
        $this->extOrderItemPrice = $extOrderItemPrice;
    }

    /**
     * @return array
     */
    public function getExtOrderPriceChangeLog(): array
    {
        return $this->extOrderPriceChangeLog;
    }

    /**
     * @param array $extOrderPriceChangeLog
     */
    public function setExtOrderPriceChangeLog(array $extOrderPriceChangeLog): void
    {
        $this->extOrderPriceChangeLog = $extOrderPriceChangeLog;
    }

    /**
     * @return array
     */
    public function getExtOrderItemPriceChangeLog(): array
    {
        return $this->extOrderItemPriceChangeLog;
    }

    /**
     * @param array $extOrderItemPriceChangeLog
     */
    public function setExtOrderItemPriceChangeLog(array $extOrderItemPriceChangeLog): void
    {
        $this->extOrderItemPriceChangeLog = $extOrderItemPriceChangeLog;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}