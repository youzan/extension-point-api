<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 *  
 * @author Baymax
 * @create Thu Feb 17 20:42:44 CST 2022
 */
class CustomizeAttributeDTO implements \JsonSerializable {

    /**
     *  
     * @var string
     */
    private $name;

    /**
     *  
     * @var int
     */
    private $dataType;

    /**
     *  
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
     * @return int
     */
    public function getDataType(): ?int
    {
        return $this->dataType;
    }

    /**
     * @param int $dataType
     */
    public function setDataType(?int $dataType): void
    {
        $this->dataType = $dataType;
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