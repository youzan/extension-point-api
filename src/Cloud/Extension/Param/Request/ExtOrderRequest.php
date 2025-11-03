<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\ExtOrderRequest\BizOrderReq;

/**
 * 请求参数
 * @author Baymax
 * @create Wed Nov 27 10:17:39 CST 2024
 */
class ExtOrderRequest implements \JsonSerializable {

    /**
     * 需要查询的单据信息
     * @var array
     */
    private $bizOrders;

    /**
     * 有赞连锁总部店铺id，仅供有赞连锁场景下使用。有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个总部
     * @var int
     */
    private $rootKdtId;



    /**
     * @return array
     */
    public function getBizOrders(): ?array
    {
        return $this->bizOrders;
    }

    /**
     * @param array $bizOrders
     */
    public function setBizOrders(?array $bizOrders): void
    {
        $this->bizOrders = $bizOrders;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}