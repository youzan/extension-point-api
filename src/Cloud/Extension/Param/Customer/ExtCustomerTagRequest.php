<?php

namespace Com\Youzan\Cloud\Extension\Param\Customer;



/**
 * 请求参数
 * @author Baymax
 * @create Thu Aug 24 18:49:00 CST 2023
 */
class ExtCustomerTagRequest implements \JsonSerializable {

    /**
     * 有赞导购id，导购在有赞的唯一id。
     * @var string
     */
    private $guideYzOpenId;

    /**
     * 有赞客户id，客户在有赞的唯一id。
     * @var string
     */
    private $customerYzOpenId;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺。
     * @var int
     */
    private $kdtId;

    /**
     * 有赞连锁总部店铺id，仅供有赞连锁场景下使用。有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个总部
     * @var int
     */
    private $rootKdtId;



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