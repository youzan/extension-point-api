<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 供应商信息
 * @author Baymax
 * @create 2019-07-26 10:29:58.0
 */
class SupplierSyncDTO implements \JsonSerializable {

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
     * 联系人电话
     * @var string
     */
    private $contactsPhone;

    /**
     * 地址
     * @var string
     */
    private $address;

    /**
     * 备注
     * @var string
     */
    private $remark;

    /**
     * qq号
     * @var string
     */
    private $qq;

    /**
     * 微信号
     * @var string
     */
    private $weiXin;

    /**
     * 传真
     * @var string
     */
    private $fax;

    /**
     * 邮箱
     * @var string
     */
    private $email;



    /**
     * @return string
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }

    /**
     * @param string $supplierName
     */
    public function setSupplierName(?string $supplierName): void
    {
        $this->supplierName = $supplierName;
    }

    /**
     * @return string
     */
    public function getSupplierCode(): ?string
    {
        return $this->supplierCode;
    }

    /**
     * @param string $supplierCode
     */
    public function setSupplierCode(?string $supplierCode): void
    {
        $this->supplierCode = $supplierCode;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getContacts(): ?string
    {
        return $this->contacts;
    }

    /**
     * @param string $contacts
     */
    public function setContacts(?string $contacts): void
    {
        $this->contacts = $contacts;
    }

    /**
     * @return string
     */
    public function getContactsPhone(): ?string
    {
        return $this->contactsPhone;
    }

    /**
     * @param string $contactsPhone
     */
    public function setContactsPhone(?string $contactsPhone): void
    {
        $this->contactsPhone = $contactsPhone;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @return string
     */
    public function getQq(): ?string
    {
        return $this->qq;
    }

    /**
     * @param string $qq
     */
    public function setQq(?string $qq): void
    {
        $this->qq = $qq;
    }

    /**
     * @return string
     */
    public function getWeiXin(): ?string
    {
        return $this->weiXin;
    }

    /**
     * @param string $weiXin
     */
    public function setWeiXin(?string $weiXin): void
    {
        $this->weiXin = $weiXin;
    }

    /**
     * @return string
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     */
    public function setFax(?string $fax): void
    {
        $this->fax = $fax;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}