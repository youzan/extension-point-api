<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Param\SendPresentItem;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class SendPresentsGift implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $chosenNum;

    /**
     *  
     * @var array
     */
    private $sendPresentItems;

    /**
     *  
     * @var string
     */
    private $giftType;



    /**
     * @return int
     */
    public function getChosenNum(): ?int
    {
        return $this->chosenNum;
    }

    /**
     * @param int $chosenNum
     */
    public function setChosenNum(?int $chosenNum): void
    {
        $this->chosenNum = $chosenNum;
    }

    /**
     * @return array
     */
    public function getSendPresentItems(): ?array
    {
        return $this->sendPresentItems;
    }

    /**
     * @param array $sendPresentItems
     */
    public function setSendPresentItems(?array $sendPresentItems): void
    {
        $this->sendPresentItems = $sendPresentItems;
    }

    /**
     * @return string
     */
    public function getGiftType(): ?string
    {
        return $this->giftType;
    }

    /**
     * @param string $giftType
     */
    public function setGiftType(?string $giftType): void
    {
        $this->giftType = $giftType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}