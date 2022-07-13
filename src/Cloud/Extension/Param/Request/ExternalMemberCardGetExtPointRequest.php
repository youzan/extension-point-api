<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Dto\CustomerSourceDTO;

/**
 * 
 * @author Baymax
 * @create 2021-10-18 19:24:18.0
 */
class ExternalMemberCardGetExtPointRequest implements \JsonSerializable {

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 客户信息
     * @var CustomerSourceDTO
     */
    private $customerSource;

    /**
     * 卡号
     * @var string
     */
    private $cardNo;

    /**
     * 是否删除
     * @var bool
     */
    private $withDeleted;



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
     * @return CustomerSourceDTO
     */
    public function getCustomerSource(): ?CustomerSourceDTO
    {
        return $this->customerSource;
    }

    /**
     * @param CustomerSourceDTO $customerSource
     */
    public function setCustomerSource(?CustomerSourceDTO $customerSource): void
    {
        $this->customerSource = $customerSource;
    }

    /**
     * @return string
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(?string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return bool
     */
    public function getWithDeleted(): ?bool
    {
        return $this->withDeleted;
    }

    /**
     * @param bool $withDeleted
     */
    public function setWithDeleted(?bool $withDeleted): void
    {
        $this->withDeleted = $withDeleted;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}