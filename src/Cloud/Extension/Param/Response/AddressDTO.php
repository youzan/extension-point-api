<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 客户收货地址信息，可从youzan.guide.trial.get.address.1.0.0获取
 * @author Baymax
 * @create Tue May 27 19:12:50 CST 2025
 */
class AddressDTO implements \JsonSerializable {

    /**
     * 收货人姓名
     * @var string
     */
    private $receiverName;

    /**
     * 收货人手机号，仅支持国内手机号
     * @var string
     */
    private $receiverTel;

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
     *  区县
     * @var string
     */
    private $district;

    /**
     * 详细地址
     * @var string
     */
    private $addressDetail;

    /**
     * 地址编码
     * @var string
     */
    private $areaCode;



    /**
     * @return string
     */
    public function getReceiverName(): ?string
    {
        return $this->receiverName;
    }

    /**
     * @param string $receiverName
     */
    public function setReceiverName(?string $receiverName): void
    {
        $this->receiverName = $receiverName;
    }

    /**
     * @return string
     */
    public function getReceiverTel(): ?string
    {
        return $this->receiverTel;
    }

    /**
     * @param string $receiverTel
     */
    public function setReceiverTel(?string $receiverTel): void
    {
        $this->receiverTel = $receiverTel;
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
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param string $district
     */
    public function setDistrict(?string $district): void
    {
        $this->district = $district;
    }

    /**
     * @return string
     */
    public function getAddressDetail(): ?string
    {
        return $this->addressDetail;
    }

    /**
     * @param string $addressDetail
     */
    public function setAddressDetail(?string $addressDetail): void
    {
        $this->addressDetail = $addressDetail;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}