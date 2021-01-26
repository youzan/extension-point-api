<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 
 * @author Baymax
 * @create 2019-07-22 20:36:12.0
 */
class SpecDTO implements \JsonSerializable {

    /**
     * 规格名称
     * @var string
     */
    private $name;

    /**
     * 规格value
     * @var string
     */
    private $value;



    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}