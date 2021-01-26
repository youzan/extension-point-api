<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\AddressExtDTO;

/**
 * 查询到的自提点列表数据
 * @author Baymax
 * @create 2021-01-22 10:18:32.0
 */
class SelfFetchPointInfoExtDTO implements \JsonSerializable {

    /**
     * 自提点ID
     * @var int
     */
    private $storeId;

    /**
     * 自提点名称
     * @var string
     */
    private $name;

    /**
     * 自提点描述
     * @var string
     */
    private $description;

    /**
     * 自提点地址信息对象
     * @var AddressExtDTO
     */
    private $addressInfo;



    /**
     * @return int
     */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }

    /**
     * @param int $storeId
     */
    public function setStoreId(?int $storeId): void
    {
        $this->storeId = $storeId;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return AddressExtDTO
     */
    public function getAddressInfo(): ?AddressExtDTO
    {
        return $this->addressInfo;
    }

    /**
     * @param AddressExtDTO $addressInfo
     */
    public function setAddressInfo(?AddressExtDTO $addressInfo): void
    {
        $this->addressInfo = $addressInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}