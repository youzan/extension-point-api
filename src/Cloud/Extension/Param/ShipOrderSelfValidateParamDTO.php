<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2018-10-08 14:51:19.0
 */
class ShipOrderSelfValidateParamDTO implements \JsonSerializable {

    /**
     * 下单过程中自定义带入数据
     * @var stdClass
     */
    private $selfDefineData;

    /**
     * 买家标识
     * @var int
     */
    private $useId;

    /**
     * 卖家标识
     * @var int
     */
    private $kdtId;



    /**
     * @return stdClass
     */
    public function getSelfDefineData(): ?stdClass
    {
        return $this->selfDefineData;
    }

    /**
     * @param stdClass $selfDefineData
     */
    public function setSelfDefineData(?stdClass $selfDefineData): void
    {
        $this->selfDefineData = $selfDefineData;
    }

    /**
     * @return int
     */
    public function getUseId(): ?int
    {
        return $this->useId;
    }

    /**
     * @param int $useId
     */
    public function setUseId(?int $useId): void
    {
        $this->useId = $useId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}