<?php

namespace Com\Youzan\Cloud\Extension\Param\Customer;



/**
 * 扩展点调用实体
 * @author Baymax
 * @create Thu Aug 17 16:16:17 CST 2023
 */
class ExtCustomerRelationBindRequestDTO implements \JsonSerializable {

    /**
     * 销售员openId
     * @var string
     */
    private $dsYzOpenId;

    /**
     * 粉丝类型
     * @var int
     */
    private $fansType;

    /**
     * 客户openId
     * @var string
     */
    private $ctYzOpenId;

    /**
     * 绑定类似来源
     * @var int
     */
    private $bindSourceType;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getDsYzOpenId(): ?string
    {
        return $this->dsYzOpenId;
    }

    /**
     * @param string $dsYzOpenId
     */
    public function setDsYzOpenId(?string $dsYzOpenId): void
    {
        $this->dsYzOpenId = $dsYzOpenId;
    }

    /**
     * @return int
     */
    public function getFansType(): ?int
    {
        return $this->fansType;
    }

    /**
     * @param int $fansType
     */
    public function setFansType(?int $fansType): void
    {
        $this->fansType = $fansType;
    }

    /**
     * @return string
     */
    public function getCtYzOpenId(): ?string
    {
        return $this->ctYzOpenId;
    }

    /**
     * @param string $ctYzOpenId
     */
    public function setCtYzOpenId(?string $ctYzOpenId): void
    {
        $this->ctYzOpenId = $ctYzOpenId;
    }

    /**
     * @return int
     */
    public function getBindSourceType(): ?int
    {
        return $this->bindSourceType;
    }

    /**
     * @param int $bindSourceType
     */
    public function setBindSourceType(?int $bindSourceType): void
    {
        $this->bindSourceType = $bindSourceType;
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