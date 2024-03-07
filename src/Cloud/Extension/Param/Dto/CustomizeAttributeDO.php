<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 客户自定义资料项信息
 * @author Baymax
 * @create Thu Aug 03 14:11:09 CST 2023
 */
class CustomizeAttributeDO implements \JsonSerializable {

    /**
     * 自定义属性名
     * @var string
     */
    private $name;

    /**
     * 自定义属性类型（0：文本，1：数字，2：日期，3：省市区，4：性别，5：图片，6：地址，7：单选项，8：多选，9：手机号）
     * @var int
     */
    private $dataType;

    /**
     * 自定义属性值
     * @var string
     */
    private $value;

    /**
     * 当dataType为7、8时，当前字段表示客户资料项中的选项值信息；其它场景可忽略该字段（仅限有赞内部项目使用）
     * @var string
     */
    private $extValue;



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

    /**
     * @return string
     */
    public function getExtValue(): ?string
    {
        return $this->extValue;
    }

    /**
     * @param string $extValue
     */
    public function setExtValue(?string $extValue): void
    {
        $this->extValue = $extValue;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}