<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ContactAddressCreateDTO;
use Com\Youzan\Cloud\Extension\Param\CustomizeAttributeDTO;

/**
 *  
 * @author Baymax
 * @create Tue Jan 10 11:40:10 CST 2023
 */
class CustomerProfileCreateDTO implements \JsonSerializable {

    /**
     * 注册手机号
     * @var string
     */
    private $registerMobile;

    /**
     * 姓名
     * @var string
     */
    private $name;

    /**
     * 性别，0：未知；1：男；2：女
     * @var int
     */
    private $gender;

    /**
     * 生日
     * @var string
     */
    private $birthday;

    /**
     * 联系地址
     * @var ContactAddressCreateDTO
     */
    private $contactAddressCreateDTO;

    /**
     * 邮箱
     * @var string
     */
    private $email;

    /**
     *  
     * @var array
     */
    private $attributeList;

    /**
     * 归属分店
     * @var int
     */
    private $ascriptionKdtId;



    /**
     * @return string
     */
    public function getRegisterMobile(): ?string
    {
        return $this->registerMobile;
    }

    /**
     * @param string $registerMobile
     */
    public function setRegisterMobile(?string $registerMobile): void
    {
        $this->registerMobile = $registerMobile;
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
     * @return int
     */
    public function getGender(): ?int
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     */
    public function setGender(?int $gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(?string $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return ContactAddressCreateDTO
     */
    public function getContactAddressCreateDTO(): ?ContactAddressCreateDTO
    {
        return $this->contactAddressCreateDTO;
    }

    /**
     * @param ContactAddressCreateDTO $contactAddressCreateDTO
     */
    public function setContactAddressCreateDTO(?ContactAddressCreateDTO $contactAddressCreateDTO): void
    {
        $this->contactAddressCreateDTO = $contactAddressCreateDTO;
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

    /**
     * @return array
     */
    public function getAttributeList(): ?array
    {
        return $this->attributeList;
    }

    /**
     * @param array $attributeList
     */
    public function setAttributeList(?array $attributeList): void
    {
        $this->attributeList = $attributeList;
    }

    /**
     * @return int
     */
    public function getAscriptionKdtId(): ?int
    {
        return $this->ascriptionKdtId;
    }

    /**
     * @param int $ascriptionKdtId
     */
    public function setAscriptionKdtId(?int $ascriptionKdtId): void
    {
        $this->ascriptionKdtId = $ascriptionKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}