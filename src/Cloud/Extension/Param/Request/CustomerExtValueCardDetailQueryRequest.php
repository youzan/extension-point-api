<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 *  
 * @author Baymax
 * @create Thu Apr 06 20:59:05 CST 2023
 */
class CustomerExtValueCardDetailQueryRequest implements \JsonSerializable {

    /**
     * 用户有赞开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 用户手机号
     * @var string
     */
    private $userPhone;

    /**
     * 卡号（调用方生成，取值自列表查询扩展点返回 cardNo 字段）
     * @var string
     */
    private $cardNo;

    /**
     * 总部店铺ID
     * @var int
     */
    private $rootKdtId;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return string
     */
    public function getUserPhone(): ?string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(?string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    /**
     * @return string
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(?string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return int
     */
    public function getRootKdtId(): ?int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(?int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}