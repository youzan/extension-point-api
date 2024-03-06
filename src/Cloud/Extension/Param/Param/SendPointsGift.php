<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class SendPointsGift implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $num;

    /**
     *  
     * @var string
     */
    private $giftType;



    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
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