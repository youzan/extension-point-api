<?php

namespace Com\Youzan\Cloud\Extension\Param\Math;



/**
 * 成本价(元)
 * @author Baymax
 * @create Tue Apr 04 17:41:47 CST 2023
 */
class BigDecimal implements \JsonSerializable {

    /**
     * 精度
     * @var int
     */
    private $precision;

    /**
     * 价格值 
     * @var string
     */
    private $stringCache;



    /**
     * @return int
     */
    public function getPrecision(): ?int
    {
        return $this->precision;
    }

    /**
     * @param int $precision
     */
    public function setPrecision(?int $precision): void
    {
        $this->precision = $precision;
    }

    /**
     * @return string
     */
    public function getStringCache(): ?string
    {
        return $this->stringCache;
    }

    /**
     * @param string $stringCache
     */
    public function setStringCache(?string $stringCache): void
    {
        $this->stringCache = $stringCache;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}