<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 
 * @author Baymax
 * @create Tue Jul 23 19:43:59 CST 2019
 */
class DisabledTicketRequestDTO implements \JsonSerializable {

    /**
     * 卡券号列表
     * @var array
     */
    private $ticketNoList;

    /**
     * 电子卡券归属的订单号
     * @var string
     */
    private $orderNo;

    /**
     * 门店id
     * @var int
     */
    private $kdtId;



    /**
     * @return array
     */
    public function getTicketNoList(): array
    {
        return $this->ticketNoList;
    }

    /**
     * @param array $ticketNoList
     */
    public function setTicketNoList(array $ticketNoList): void
    {
        $this->ticketNoList = $ticketNoList;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}