<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 
 * @author Baymax
 * @create 2019-07-26 10:49:41.0
 */
class YZLogisticsDTO implements \JsonSerializable {

    /**
     * 物流单号
     * @var string
     */
    private $logisticsNo;

    /**
     * 物流公司编号
     * @var string
     */
    private $companyCode;

    /**
     * 收件人
     * @var string
     */
    private $receiver;

    /**
     * 收件人电话
     * @var string
     */
    private $mobile;

    /**
     * 区号
     * @var string
     */
    private $areaCode;

    /**
     * 座机
     * @var string
     */
    private $telephone;

    /**
     * 分机号
     * @var string
     */
    private $extensionNumber;

    /**
     * 收件人地址
     * @var string
     */
    private $address;

    /**
     * 邮编
     * @var int
     */
    private $postcode;

    /**
     * 省份
     * @var string
     */
    private $province;

    /**
     * 城市
     * @var string
     */
    private $city;

    /**
     * 地区
     * @var string
     */
    private $region;



    /**
     * @return string
     */
    public function getLogisticsNo(): ?string
    {
        return $this->logisticsNo;
    }

    /**
     * @param string $logisticsNo
     */
    public function setLogisticsNo(?string $logisticsNo): void
    {
        $this->logisticsNo = $logisticsNo;
    }

    /**
     * @return string
     */
    public function getCompanyCode(): ?string
    {
        return $this->companyCode;
    }

    /**
     * @param string $companyCode
     */
    public function setCompanyCode(?string $companyCode): void
    {
        $this->companyCode = $companyCode;
    }

    /**
     * @return string
     */
    public function getReceiver(): ?string
    {
        return $this->receiver;
    }

    /**
     * @param string $receiver
     */
    public function setReceiver(?string $receiver): void
    {
        $this->receiver = $receiver;
    }

    /**
     * @return string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(?string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getAreaCode(): ?string
    {
        return $this->areaCode;
    }

    /**
     * @param string $areaCode
     */
    public function setAreaCode(?string $areaCode): void
    {
        $this->areaCode = $areaCode;
    }

    /**
     * @return string
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getExtensionNumber(): ?string
    {
        return $this->extensionNumber;
    }

    /**
     * @param string $extensionNumber
     */
    public function setExtensionNumber(?string $extensionNumber): void
    {
        $this->extensionNumber = $extensionNumber;
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
     * @return int
     */
    public function getPostcode(): ?int
    {
        return $this->postcode;
    }

    /**
     * @param int $postcode
     */
    public function setPostcode(?int $postcode): void
    {
        $this->postcode = $postcode;
    }

    /**
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @param string $province
     */
    public function setProvince(?string $province): void
    {
        $this->province = $province;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}