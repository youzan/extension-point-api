<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 会员自定义资料项
 * @author Baymax
 * @create Sat Jul 30 23:34:06 CST 2022
 */
class CustomizeAttributeDTO implements \JsonSerializable {

    /**
     * 资料项字段名称
     * @var string
     */
    private $name;

    /**
     * 资料项字段类型，0：文本，1：数字，2：日期，3：省市区，4：性别，5：图片，6：地址，7：单选项，8：多选，9：手机号
     * @var int
     */
    private $dataType;

    /**
     * 资料项字段值
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