<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 请求参数
 * @author Baymax
 * @create Mon Aug 22 16:50:59 CST 2022
 */
class RelationExtPointCanBindRelationRequest implements \JsonSerializable {

    /**
     * 总部店铺ID，如果单店 则为店铺ID
     * @var int
     */
    private $rootKdtId;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 导购员yzOpenId
     * @var string
     */
    private $guideYzOpenId;

    /**
     * 客户yzOpenId
     * @var string
     */
    private $customerYzOpenId;



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
     * @return string
     */
    public function getGuideYzOpenId(): ?string
    {
        return $this->guideYzOpenId;
    }

    /**
     * @param string $guideYzOpenId
     */
    public function setGuideYzOpenId(?string $guideYzOpenId): void
    {
        $this->guideYzOpenId = $guideYzOpenId;
    }

    /**
     * @return string
     */
    public function getCustomerYzOpenId(): ?string
    {
        return $this->customerYzOpenId;
    }

    /**
     * @param string $customerYzOpenId
     */
    public function setCustomerYzOpenId(?string $customerYzOpenId): void
    {
        $this->customerYzOpenId = $customerYzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}