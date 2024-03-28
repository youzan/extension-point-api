<?php

namespace Com\Youzan\Cloud\Extension\Param\Account;


use Com\Youzan\Cloud\Extension\Param\Account\ExtAccountVerifyDTO;

/**
 *  
 * @author Baymax
 * @create Mon Mar 14 16:42:47 CST 2022
 */
class ExtAccountVerifyRequestDTO implements \JsonSerializable {

    /**
     * 待审核的分销员用户id列表.（已废弃）
     * @var array
     */
    private $buyerIds;

    /**
     * 待审核的分销员信息列表
     * @var array
     */
    private $accountVerifyInfoList;

    /**
     * 分销员所在店铺id
     * @var int
     */
    private $kdtId;



    /**
     * @return array
     */
    public function getBuyerIds(): ?array
    {
        return $this->buyerIds;
    }

    /**
     * @param array $buyerIds
     */
    public function setBuyerIds(?array $buyerIds): void
    {
        $this->buyerIds = $buyerIds;
    }

    /**
     * @return array
     */
    public function getAccountVerifyInfoList(): ?array
    {
        return $this->accountVerifyInfoList;
    }

    /**
     * @param array $accountVerifyInfoList
     */
    public function setAccountVerifyInfoList(?array $accountVerifyInfoList): void
    {
        $this->accountVerifyInfoList = $accountVerifyInfoList;
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