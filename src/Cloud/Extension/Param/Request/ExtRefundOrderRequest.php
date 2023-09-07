<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Java\Lang\String;

/**
 * 请求体
 * @author Baymax
 * @create Tue Aug 29 15:23:30 CST 2023
 */
class ExtRefundOrderRequest implements \JsonSerializable {

    /**
     * 商家总部id，微商城使用微商城单店ID、有赞连锁使用总部店铺id。有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个总部
     * @var int
     */
    private $rootKdtId;

    /**
     * 退款单号列表
     * @var array
     */
    private $refundIdList;



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

    /**
     * @return array
     */
    public function getRefundIdList(): ?array
    {
        return $this->refundIdList;
    }

    /**
     * @param array $refundIdList
     */
    public function setRefundIdList(?array $refundIdList): void
    {
        $this->refundIdList = $refundIdList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}