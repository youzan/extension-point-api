<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 22:31:02 CST 2022
 */
class TicketStatusInfoDTO implements \JsonSerializable {

    /**
     * 券码
     * @var string
     */
    private $ticketNo;

    /**
     * 核销状态：DEFALUT(0, &quot;默认&quot;),NOT_VERIFIED(1, &quot;未核销&quot;)，VERIFIED(2, &quot;已核销&quot;),  DISABLED(3, &quot;已失效&quot;),EXPIRED(4, &quot;已过期&quot;),REFUNDING(5, &quot;退款中&quot;);
     * @var int
     */
    private $verifyState;



    /**
     * @return string
     */
    public function getTicketNo(): ?string
    {
        return $this->ticketNo;
    }

    /**
     * @param string $ticketNo
     */
    public function setTicketNo(?string $ticketNo): void
    {
        $this->ticketNo = $ticketNo;
    }

    /**
     * @return int
     */
    public function getVerifyState(): ?int
    {
        return $this->verifyState;
    }

    /**
     * @param int $verifyState
     */
    public function setVerifyState(?int $verifyState): void
    {
        $this->verifyState = $verifyState;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}