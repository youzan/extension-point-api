<?php

namespace Com\Youzan\Cloud\Extension\Param\Tricket;

use Com\Youzan\Cloud\Extension\Param\Ticket\TicketItemResponseDTO;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-08-01 20:29:39.0
 */
class TicketStatusChangedMsgDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 店铺标识
     * @var int
     */
    private $kdtId;

    /**
     * 虚拟号
     * @var string
     */
    private $virtualCode;

    /**
     * 核销时间
     * @var int
     */
    private $verifyTime;

    /**
     * 核销状态
     * @var int
     */
    private $verifyState;

    /**
     * 券码状态
     * @var array
     */
    private $ticketItemResponseDTOList;

    /**
     * 核销二维码base64
     * @var string
     */
    private $qrCode;

    /**
     * 核销条形码base64
     * @var string
     */
    private $barCode;

    /**
     * 最近一次核销记录id
     * @var int
     */
    private $lastRecordId;

    /**
     * 电子卡券有效期开始时间
     * @var int
     */
    private $effectiveStartTime;

    /**
     * 电子卡券有效期结束时间
     * @var int
     */
    private $effectiveEndTime;

    /**
     * 扩展字段 DEFALUT(0, &quot;默认&quot;),   NOT_VERIFIED(1, &quot;未核销&quot;),   VERIFIED(2, &quot;已核销&quot;),   DISABLED(3, &quot;已失效&quot;),     //业务含义已过期,未核销的卡券且过了有效期的结束时间   EXPIRED(4, &quot;已过期&quot;),   REFUNDING(5, &quot;退款中&quot;);
     * @var stdClass
     */
    private $extra;



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

    /**
     * @return string
     */
    public function getVirtualCode(): string
    {
        return $this->virtualCode;
    }

    /**
     * @param string $virtualCode
     */
    public function setVirtualCode(string $virtualCode): void
    {
        $this->virtualCode = $virtualCode;
    }

    /**
     * @return int
     */
    public function getVerifyTime(): int
    {
        return $this->verifyTime;
    }

    /**
     * @param int $verifyTime
     */
    public function setVerifyTime(int $verifyTime): void
    {
        $this->verifyTime = $verifyTime;
    }

    /**
     * @return int
     */
    public function getVerifyState(): int
    {
        return $this->verifyState;
    }

    /**
     * @param int $verifyState
     */
    public function setVerifyState(int $verifyState): void
    {
        $this->verifyState = $verifyState;
    }

    /**
     * @return array
     */
    public function getTicketItemResponseDTOList(): array
    {
        return $this->ticketItemResponseDTOList;
    }

    /**
     * @param array $ticketItemResponseDTOList
     */
    public function setTicketItemResponseDTOList(array $ticketItemResponseDTOList): void
    {
        $this->ticketItemResponseDTOList = $ticketItemResponseDTOList;
    }

    /**
     * @return string
     */
    public function getQrCode(): string
    {
        return $this->qrCode;
    }

    /**
     * @param string $qrCode
     */
    public function setQrCode(string $qrCode): void
    {
        $this->qrCode = $qrCode;
    }

    /**
     * @return string
     */
    public function getBarCode(): string
    {
        return $this->barCode;
    }

    /**
     * @param string $barCode
     */
    public function setBarCode(string $barCode): void
    {
        $this->barCode = $barCode;
    }

    /**
     * @return int
     */
    public function getLastRecordId(): int
    {
        return $this->lastRecordId;
    }

    /**
     * @param int $lastRecordId
     */
    public function setLastRecordId(int $lastRecordId): void
    {
        $this->lastRecordId = $lastRecordId;
    }

    /**
     * @return int
     */
    public function getEffectiveStartTime(): int
    {
        return $this->effectiveStartTime;
    }

    /**
     * @param int $effectiveStartTime
     */
    public function setEffectiveStartTime(int $effectiveStartTime): void
    {
        $this->effectiveStartTime = $effectiveStartTime;
    }

    /**
     * @return int
     */
    public function getEffectiveEndTime(): int
    {
        return $this->effectiveEndTime;
    }

    /**
     * @param int $effectiveEndTime
     */
    public function setEffectiveEndTime(int $effectiveEndTime): void
    {
        $this->effectiveEndTime = $effectiveEndTime;
    }

    /**
     * @return stdClass
     */
    public function getExtra(): stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(stdClass $extra): void
    {
        $this->extra = $extra;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}