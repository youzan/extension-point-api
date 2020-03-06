<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create Fri Nov 22 12:00:30 CST 2019
 */
class ValueCardExtRechargeQueryRequest implements \JsonSerializable {

    /**
     * 业务充值单号，以此做幂等
     * @var string
     */
    private $rechargeNo;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getRechargeNo(): string
    {
        return $this->rechargeNo;
    }

    /**
     * @param string $rechargeNo
     */
    public function setRechargeNo(string $rechargeNo): void
    {
        $this->rechargeNo = $rechargeNo;
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