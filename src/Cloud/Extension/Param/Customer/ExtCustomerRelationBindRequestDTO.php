<?php

namespace Com\Youzan\Cloud\Extension\Param\Customer;



/**
 * 
 * @author Baymax
 * @create 2020-09-29 15:49:12.0
 */
class ExtCustomerRelationBindRequestDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $dsUid;

    /**
     * 
     * @var int
     */
    private $fansType;

    /**
     * 
     * @var int
     */
    private $ctUid;

    /**
     * 
     * @var int
     */
    private $bindSourceType;

    /**
     * 
     * @var int
     */
    private $kdtId;



    /**
     * @return int
     */
    public function getDsUid(): int
    {
        return $this->dsUid;
    }

    /**
     * @param int $dsUid
     */
    public function setDsUid(int $dsUid): void
    {
        $this->dsUid = $dsUid;
    }

    /**
     * @return int
     */
    public function getFansType(): int
    {
        return $this->fansType;
    }

    /**
     * @param int $fansType
     */
    public function setFansType(int $fansType): void
    {
        $this->fansType = $fansType;
    }

    /**
     * @return int
     */
    public function getCtUid(): int
    {
        return $this->ctUid;
    }

    /**
     * @param int $ctUid
     */
    public function setCtUid(int $ctUid): void
    {
        $this->ctUid = $ctUid;
    }

    /**
     * @return int
     */
    public function getBindSourceType(): int
    {
        return $this->bindSourceType;
    }

    /**
     * @param int $bindSourceType
     */
    public function setBindSourceType(int $bindSourceType): void
    {
        $this->bindSourceType = $bindSourceType;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}