<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ContactAddressDTO;

/**
 * 
 * @author Baymax
 * @create 2018-10-09 16:05:49.0
 */
class CustomerProfileDTO implements \JsonSerializable {

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
     * 是否为会员
     * @var bool
     */
    private $isMember;

    /**
     * 地址信息
     * @var ContactAddressDTO
     */
    private $contactAddressDTO;

    /**
     * 邮箱
     * @var string
     */
    private $email;

    /**
     * 最新的昵称
     * @var string
     */
    private $latestNickName;

    /**
     * 最新的头像
     * @var string
     */
    private $latestAvatar;



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
     * @return bool
     */
    public function getIsMember(): ?bool
    {
        return $this->isMember;
    }

    /**
     * @param bool $isMember
     */
    public function setIsMember(?bool $isMember): void
    {
        $this->isMember = $isMember;
    }

    /**
     * @return ContactAddressDTO
     */
    public function getContactAddressDTO(): ?ContactAddressDTO
    {
        return $this->contactAddressDTO;
    }

    /**
     * @param ContactAddressDTO $contactAddressDTO
     */
    public function setContactAddressDTO(?ContactAddressDTO $contactAddressDTO): void
    {
        $this->contactAddressDTO = $contactAddressDTO;
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
     * @return string
     */
    public function getLatestNickName(): ?string
    {
        return $this->latestNickName;
    }

    /**
     * @param string $latestNickName
     */
    public function setLatestNickName(?string $latestNickName): void
    {
        $this->latestNickName = $latestNickName;
    }

    /**
     * @return string
     */
    public function getLatestAvatar(): ?string
    {
        return $this->latestAvatar;
    }

    /**
     * @param string $latestAvatar
     */
    public function setLatestAvatar(?string $latestAvatar): void
    {
        $this->latestAvatar = $latestAvatar;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}