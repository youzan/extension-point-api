<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 用户标准属性
 * @author Baymax
 * @create Wed Apr 24 10:11:52 CST 2019
 */
class CustomerStandardAttributes implements \JsonSerializable {

    /**
     * 生日
     * @var string
     */
    private $birthday;

    /**
     * 名字
     * @var string
     */
    private $name;

    /**
     * 手机
     * @var string
     */
    private $mobile;



    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}