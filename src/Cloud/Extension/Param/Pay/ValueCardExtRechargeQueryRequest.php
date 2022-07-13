<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 请求参数
 * @author Baymax
 * @create Mon Mar 14 19:27:00 CST 2022
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
     * 总部店铺ID
     * @var int
     */
    private $rootKdtId;



    /**
     * @return string
     */
    public function getRechargeNo(): ?string
    {
        return $this->rechargeNo;
    }

    /**
     * @param string $rechargeNo
     */
    public function setRechargeNo(?string $rechargeNo): void
    {
        $this->rechargeNo = $rechargeNo;
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
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}