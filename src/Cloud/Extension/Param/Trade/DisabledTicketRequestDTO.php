<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use Java\Lang\String;

/**
 *  
 * @author Baymax
 * @create Tue Mar 01 18:41:04 CST 2022
 */
class DisabledTicketRequestDTO implements \JsonSerializable {

    /**
     * 卡券号列表
     * @var array
     */
    private $ticketNoList;

    /**
     * 电子卡券归属的订单号，有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合。
     * @var string
     */
    private $orderNo;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;



    /**
     * @return array
     */
    public function getTicketNoList(): ?array
    {
        return $this->ticketNoList;
    }

    /**
     * @param array $ticketNoList
     */
    public function setTicketNoList(?array $ticketNoList): void
    {
        $this->ticketNoList = $ticketNoList;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}