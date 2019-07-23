<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 
 * @author Baymax
 * @create 2019-07-23 10:46:51.0
 */
class SupplierInfoSyncResponseDTO implements \JsonSerializable {

    /**
     * 记录总数
     * @var int
     */
    private $totalCount;

    /**
     * 供应商名称，供应商名称不能为空
     * @var string
     */
    private $supplierName;

    /**
     * 供应商编码
     * @var string
     */
    private $supplierCode;

    /**
     * 公司电话
     * @var string
     */
    private $phone;

    /**
     * 联系人
     * @var string
     */
    private $contacts;



    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    /**
     * @return string
     */
    public function getSupplierName(): string
    {
        return $this->supplierName;
    }

    /**
     * @param string $supplierName
     */
    public function setSupplierName(string $supplierName): void
    {
        $this->supplierName = $supplierName;
    }

    /**
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->supplierCode;
    }

    /**
     * @param string $supplierCode
     */
    public function setSupplierCode(string $supplierCode): void
    {
        $this->supplierCode = $supplierCode;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getContacts(): string
    {
        return $this->contacts;
    }

    /**
     * @param string $contacts
     */
    public function setContacts(string $contacts): void
    {
        $this->contacts = $contacts;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}