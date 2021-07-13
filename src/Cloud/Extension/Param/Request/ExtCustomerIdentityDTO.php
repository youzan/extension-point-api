<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 用户信息
 * @author Baymax
 * @create 2021-07-09 13:03:53.0
 */
class ExtCustomerIdentityDTO implements \JsonSerializable {

    /**
     * 账号id
     * @var string
     */
    private $accountId;

    /**
     * 账户类型
     * @var string
     */
    private $accountType;

    /**
     * 用户id
     * @var int
     */
    private $userId;



    /**
     * @return string
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     */
    public function setAccountId(?string $accountId): void
    {
        $this->accountId = $accountId;
    }

    /**
     * @return string
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @param string $accountType
     */
    public function setAccountType(?string $accountType): void
    {
        $this->accountType = $accountType;
    }

    /**
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}