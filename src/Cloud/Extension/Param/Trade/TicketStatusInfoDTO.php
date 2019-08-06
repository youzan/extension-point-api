<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 
 * @author Baymax
 * @create Wed Jul 24 13:19:41 CST 2019
 */
class TicketStatusInfoDTO implements \JsonSerializable {

    /**
     * 券码
     * @var string
     */
    private $ticketNo;

    /**
     * 核销状态
     * @var int
     */
    private $verifyState;



    /**
     * @return string
     */
    public function getTicketNo(): string
    {
        return $this->ticketNo;
    }

    /**
     * @param string $ticketNo
     */
    public function setTicketNo(string $ticketNo): void
    {
        $this->ticketNo = $ticketNo;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}