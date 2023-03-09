<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 客户自定义资料项信息
 * @author Baymax
 * @create Fri Aug 26 18:35:08 CST 2022
 */
class CustomizeAttributeDO implements \JsonSerializable {

    /**
     * 自定义属性名
     * @var string
     */
    private $name;

    /**
     * 自定义属性类型
     * @var int
     */
    private $dataType;

    /**
     * 自定义属性值
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