<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;

use Com\Youzan\Cloud\Extension\Param\Scrm\ContactAddressModifyDTO;

/**
 * 更新会员所需的资料
 * @author Baymax
 * @create 2018-09-29 21:39:22.0
 */
class MemberProfileModifyDTO implements \JsonSerializable {

    /**
     * 姓名
     * @var string
     */
    private $name;

    /**
     * 性别,0:未知;1:男;2:女
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
     * @var ContactAddressModifyDTO
     */
    private $contactAddressModifyDTO;

    /**
     * 邮箱
     * @var string
     */
    private $email;



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
     * @return int
     */
    public function getGender(): int
    {
        return $this->gender;
    }

    /**
     * @param int $gender
     */
    public function setGender(int $gender): void
    {
        $this->gender = $gender;
    }

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
     * @return ContactAddressModifyDTO
     */
    public function getContactAddressModifyDTO(): ContactAddressModifyDTO
    {
        return $this->contactAddressModifyDTO;
    }

    /**
     * @param ContactAddressModifyDTO $contactAddressModifyDTO
     */
    public function setContactAddressModifyDTO(ContactAddressModifyDTO $contactAddressModifyDTO): void
    {
        $this->contactAddressModifyDTO = $contactAddressModifyDTO;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}