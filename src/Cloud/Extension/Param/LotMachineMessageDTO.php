<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2019-08-06 09:38:38.0
 */
class LotMachineMessageDTO implements \JsonSerializable {

    /**
     * 唯一码列表
     * @var array
     */
    private $uniqueCode;

    /**
     * 发生业务属于的kdtId
     * @var int
     */
    private $kdtId;

    /**
     * 业务类型 41:网店销售出库  42：门店销售出库
     * @var int
     */
    private $businessDetailType;



    /**
     * @return array
     */
    public function getUniqueCode(): ?array
    {
        return $this->uniqueCode;
    }

    /**
     * @param array $uniqueCode
     */
    public function setUniqueCode(?array $uniqueCode): void
    {
        $this->uniqueCode = $uniqueCode;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getBusinessDetailType(): ?int
    {
        return $this->businessDetailType;
    }

    /**
     * @param int $businessDetailType
     */
    public function setBusinessDetailType(?int $businessDetailType): void
    {
        $this->businessDetailType = $businessDetailType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}