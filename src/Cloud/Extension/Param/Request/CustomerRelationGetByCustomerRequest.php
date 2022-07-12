<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 *  
 * @author Baymax
 * @create Fri Apr 22 14:09:02 CST 2022
 */
class CustomerRelationGetByCustomerRequest implements \JsonSerializable {

    /**
     * 客户有赞用户id
     * @var int
     */
    private $ctYzOpenId;

    /**
     * 店铺id,当前店铺id，如果是店铺操作，则会传店铺id，如果是总部操作，则不需要传
     * @var int
     */
    private $kdtId;

    /**
     * 商家总部id，如果是单店则是单店店铺id
     * @var int
     */
    private $rootKdtId;



    /**
     * @return int
     */
    public function getCtYzOpenId(): ?int
    {
        return $this->ctYzOpenId;
    }

    /**
     * @param int $ctYzOpenId
     */
    public function setCtYzOpenId(?int $ctYzOpenId): void
    {
        $this->ctYzOpenId = $ctYzOpenId;
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