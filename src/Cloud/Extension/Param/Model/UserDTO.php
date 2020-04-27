<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 
 * @author Baymax
 * @create 2020-04-27 17:33:11.0
 */
class UserDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $buyerId;

    /**
     * 
     * @var string
     */
    private $mobile;



    /**
     * @return int
     */
    public function getBuyerId(): int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}