<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create Tue Sep 10 17:13:06 CST 2019
 */
class CustomizeAttributeDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $name;

    /**
     * 
     * @var string
     */
    private $value;

    /**
     * 
     * @var int
     */
    private $dataType;



    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getDataType(): int
    {
        return $this->dataType;
    }

    /**
     * @param int $dataType
     */
    public function setDataType(int $dataType): void
    {
        $this->dataType = $dataType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}