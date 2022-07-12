<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 客户关系
 * @author Baymax
 * @create Fri Apr 22 14:09:02 CST 2022
 */
class GuideCustomerRelationResponse implements \JsonSerializable {

    /**
     * 导购员有赞用户id
     * @var int
     */
    private $dsYzOpenId;

    /**
     * 客户所在店铺
     * @var int
     */
    private $kdtId;

    /**
     * 客户所在店铺的总部id，如果是单店，则是单店店铺id
     * @var int
     */
    private $rootKdtId;

    /**
     * 客户有赞用户id
     * @var int
     */
    private $ctYzOpenId;

    /**
     * 是否生效：1.生效、2.无效
     * @var int
     */
    private $valid;



    /**
     * @return int
     */
    public function getDsYzOpenId(): ?int
    {
        return $this->dsYzOpenId;
    }

    /**
     * @param int $dsYzOpenId
     */
    public function setDsYzOpenId(?int $dsYzOpenId): void
    {
        $this->dsYzOpenId = $dsYzOpenId;
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
    public function getValid(): ?int
    {
        return $this->valid;
    }

    /**
     * @param int $valid
     */
    public function setValid(?int $valid): void
    {
        $this->valid = $valid;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}