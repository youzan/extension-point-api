<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * openId绑定消息体
 * @author Baymax
 * @create Wed Mar 27 18:36:51 CST 2019
 */
class OpenIdBindNsqDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 买家id
     * @var string
     */
    private $buyerId;

    /**
     * 墨子公众号id
     * @var string
     */
    private $openID;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 推荐人
     * @var stdClass
     */
    private $tpPsMap;

    /**
     * 墨子微信体系下的unionID
     * @var string
     */
    private $unionID;



    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getBuyerId(): string
    {
        return $this->buyerId;
    }

    /**
     * @param string $buyerId
     */
    public function setBuyerId(string $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getOpenID(): string
    {
        return $this->openID;
    }

    /**
     * @param string $openID
     */
    public function setOpenID(string $openID): void
    {
        $this->openID = $openID;
    }

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
     * @return stdClass
     */
    public function getTpPsMap(): stdClass
    {
        return $this->tpPsMap;
    }

    /**
     * @param stdClass $tpPsMap
     */
    public function setTpPsMap(stdClass $tpPsMap): void
    {
        $this->tpPsMap = $tpPsMap;
    }

    /**
     * @return string
     */
    public function getUnionID(): string
    {
        return $this->unionID;
    }

    /**
     * @param string $unionID
     */
    public function setUnionID(string $unionID): void
    {
        $this->unionID = $unionID;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}