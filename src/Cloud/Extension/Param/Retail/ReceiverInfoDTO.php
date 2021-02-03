<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 收件人信息
 * @author Baymax
 * @create 2019-08-06 10:42:46.0
 */
class ReceiverInfoDTO implements \JsonSerializable {

    /**
     * 省
     * @var string
     */
    private $province;

    /**
     * 市
     * @var string
     */
    private $city;

    /**
     * 区
     * @var string
     */
    private $area;

    /**
     * 详细地址
     * @var string
     */
    private $detailAddress;

    /**
     * 移动电话
     * @var string
     */
    private $mobile;

    /**
     * 固定电话
     * @var string
     */
    private $tel;

    /**
     * 姓名
     * @var string
     */
    private $name;



    /**
     * @return string
     */
    public function getProvince(): string
    {
        return $this->province;
    }

    /**
     * @param string $province
     */
    public function setProvince(string $province): void
    {
        $this->province = $province;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getArea(): string
    {
        return $this->area;
    }

    /**
     * @param string $area
     */
    public function setArea(string $area): void
    {
        $this->area = $area;
    }

    /**
     * @return string
     */
    public function getDetailAddress(): string
    {
        return $this->detailAddress;
    }

    /**
     * @param string $detailAddress
     */
    public function setDetailAddress(string $detailAddress): void
    {
        $this->detailAddress = $detailAddress;
    }

    /**
     * @return string
     */
    public function getMobile(): string
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     */
    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return string
     */
    public function getTel(): string
    {
        return $this->tel;
    }

    /**
     * @param string $tel
     */
    public function setTel(string $tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}