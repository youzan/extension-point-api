<?php

namespace Com\Youzan\Cloud\Extension\Param\Introduction;



/**
 * 公域属性
 * @author Baymax
 * @create Tue Apr 04 17:41:47 CST 2023
 */
class ItemProValueParam implements \JsonSerializable {

    /**
     * 属性项ID
     * @var int
     */
    private $proId;

    /**
     * 属性项名称
     * @var string
     */
    private $proName;

    /**
     * 属性值名称有多选情况
     * @var array
     */
    private $valNames;

    /**
     * 属性值ID，有多选情况
     * @var array
     */
    private $valIds;



    /**
     * @return int
     */
    public function getProId(): ?int
    {
        return $this->proId;
    }

    /**
     * @param int $proId
     */
    public function setProId(?int $proId): void
    {
        $this->proId = $proId;
    }

    /**
     * @return string
     */
    public function getProName(): ?string
    {
        return $this->proName;
    }

    /**
     * @param string $proName
     */
    public function setProName(?string $proName): void
    {
        $this->proName = $proName;
    }

    /**
     * @return array
     */
    public function getValNames(): ?array
    {
        return $this->valNames;
    }

    /**
     * @param array $valNames
     */
    public function setValNames(?array $valNames): void
    {
        $this->valNames = $valNames;
    }

    /**
     * @return array
     */
    public function getValIds(): ?array
    {
        return $this->valIds;
    }

    /**
     * @param array $valIds
     */
    public function setValIds(?array $valIds): void
    {
        $this->valIds = $valIds;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}