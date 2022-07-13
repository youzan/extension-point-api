<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 外部系统返回的用户
 * @author Baymax
 * @create Mon Mar 14 16:39:41 CST 2022
 */
class OuterUserDTO implements \JsonSerializable {

    /**
     * 外部系统中用户的主键
     * @var string
     */
    private $id;

    /**
     * 外部系统中的用户手机号
     * @var string
     */
    private $phone;

    /**
     * 外部系统中的用户名称
     * @var string
     */
    private $name;



    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}