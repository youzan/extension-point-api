<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 客户信息
 * @author Baymax
 * @create 2021-10-18 19:24:18.0
 */
class CustomerSourceDTO implements \JsonSerializable {

    /**
     * 客户id
     * @var int
     */
    private $userId;



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