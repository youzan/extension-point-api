<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2021-07-09 13:03:53.0
 */
class ExtCustomerIdentityDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $accountId;

    /**
     * 
     * @var string
     */
    private $accountType;

    /**
     * 
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