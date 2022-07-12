<?php

namespace Com\Youzan\Cloud\Extension\Param\Distributor;



/**
 * 入参
 * @author Baymax
 * @create Wed Mar 23 15:20:15 CST 2022
 */
class ExtDistributorPlaintextPowerRequestDTO implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 用户id
     * @var int
     */
    private $adminId;



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
    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    /**
     * @param int $adminId
     */
    public function setAdminId(?int $adminId): void
    {
        $this->adminId = $adminId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}