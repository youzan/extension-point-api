<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 权益载体
 * @author Baymax
 * @create 2020-03-10 15:44:13.0
 */
class ExtCarrierTplInfoDTO implements \JsonSerializable {

    /**
     * 载体别名(载体的标识)
     * @var string
     */
    private $carrierTplAlias;

    /**
     * 载体类型(目前仅支持会员等级类型的载体carrierType&#x3D;2)
     * @var int
     */
    private $carrierType;



    /**
     * @return string
     */
    public function getCarrierTplAlias(): string
    {
        return $this->carrierTplAlias;
    }

    /**
     * @param string $carrierTplAlias
     */
    public function setCarrierTplAlias(string $carrierTplAlias): void
    {
        $this->carrierTplAlias = $carrierTplAlias;
    }

    /**
     * @return int
     */
    public function getCarrierType(): int
    {
        return $this->carrierType;
    }

    /**
     * @param int $carrierType
     */
    public function setCarrierType(int $carrierType): void
    {
        $this->carrierType = $carrierType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}