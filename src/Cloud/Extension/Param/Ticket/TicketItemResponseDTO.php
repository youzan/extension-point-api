<?php

namespace Com\Youzan\Cloud\Extension\Param\Ticket;



/**
 * 券码状态
 * @author Baymax
 * @create 2019-08-01 20:29:39.0
 */
class TicketItemResponseDTO implements \JsonSerializable {

    /**
     * 券码
     * @var string
     */
    private $ticketNo;

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
     * 核销人
     * @var int
     */
    private $userId;

    /**
     * 商品名称
     * @var string
     */
    private $title;

    /**
     * 券实付金额
     * @var int
     */
    private $price;



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
    public function getVerifyTime(): ?int
    {
        return $this->verifyTime;
    }

    /**
     * @param int $verifyTime
     */
    public function setVerifyTime(?int $verifyTime): void
    {
        $this->verifyTime = $verifyTime;
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

    /**
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(?int $price): void
    {
        $this->price = $price;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}