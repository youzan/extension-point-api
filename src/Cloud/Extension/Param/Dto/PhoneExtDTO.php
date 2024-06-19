<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 号码信息
 * @author Baymax
 * @create Thu Jun 13 16:02:19 CST 2024
 */
class PhoneExtDTO implements \JsonSerializable {

    /**
     * 区号
     * @var string
     */
    private $areaCode;

    /**
     * 电话或者手机号
     * @var string
     */
    private $localNumber;



    /**
     * @return string
     */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }

    /**
     * @param string $areaCode
     */
    public function setAreaCode(?string $areaCode): void
    {
        $this->areaCode = $areaCode;
    }

    /**
     * @return string
     */
    public function getLocalNumber(): ?string
    {
        return $this->localNumber;
    }

    /**
     * @param string $localNumber
     */
    public function setLocalNumber(?string $localNumber): void
    {
        $this->localNumber = $localNumber;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}