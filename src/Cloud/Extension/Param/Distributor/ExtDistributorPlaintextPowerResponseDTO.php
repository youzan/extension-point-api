<?php

namespace Com\Youzan\Cloud\Extension\Param\Distributor;



/**
 * 相应参数
 * @author Baymax
 * @create Wed Mar 23 15:20:15 CST 2022
 */
class ExtDistributorPlaintextPowerResponseDTO implements \JsonSerializable {

    /**
     * 是否有查看手机号明文权限
     * @var bool
     */
    private $isDesensitization;



    /**
     * @return bool
     */
    public function getIsDesensitization(): ?bool
    {
        return $this->isDesensitization;
    }

    /**
     * @param bool $isDesensitization
     */
    public function setIsDesensitization(?bool $isDesensitization): void
    {
        $this->isDesensitization = $isDesensitization;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}