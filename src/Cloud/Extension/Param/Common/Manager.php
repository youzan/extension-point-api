<?php

namespace Com\Youzan\Cloud\Extension\Param\Common;



/**
 * 
 * @author Baymax
 * @create 2020-03-19 10:50:21.0
 */
class Manager implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $managerName;

    /**
     * 
     * @var string
     */
    private $managerCountryCode;

    /**
     * 
     * @var string
     */
    private $managerMobileNumber;



    /**
     * @return string
     */
    public function getManagerName(): string
    {
        return $this->managerName;
    }

    /**
     * @param string $managerName
     */
    public function setManagerName(string $managerName): void
    {
        $this->managerName = $managerName;
    }

    /**
     * @return string
     */
    public function getManagerCountryCode(): string
    {
        return $this->managerCountryCode;
    }

    /**
     * @param string $managerCountryCode
     */
    public function setManagerCountryCode(string $managerCountryCode): void
    {
        $this->managerCountryCode = $managerCountryCode;
    }

    /**
     * @return string
     */
    public function getManagerMobileNumber(): string
    {
        return $this->managerMobileNumber;
    }

    /**
     * @param string $managerMobileNumber
     */
    public function setManagerMobileNumber(string $managerMobileNumber): void
    {
        $this->managerMobileNumber = $managerMobileNumber;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}