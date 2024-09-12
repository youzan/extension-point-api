<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Request\ExtCustomerInfoDTO;

/**
 * 请求参数
 * @author Baymax
 * @create Thu May 23 16:02:53 CST 2024
 */
class ExtPointsExpiredDTO implements \JsonSerializable {

    /**
     * 账户信息
     * @var ExtCustomerInfoDTO
     */
    private $extCustomerInfoDTO;

    /**
     * 总店id
     * @var int
     */
    private $kdtId;

    /**
     * 触发店铺的店铺id，当连锁触发返回分店id，总部触发返回总部id，单店触发返回单店店铺id
     * @var int
     */
    private $nodeId;

    /**
     * 过期时间（秒级时间戳）
     * @var int
     */
    private $expiredAt;

    /**
     * 过期数值
     * @var int
     */
    private $amount;

    /**
     * 业务唯一标识，如：#{kdtId}_#{accountId}_0_#{expiredAt}
     * @var string
     */
    private $bizValue;



    /**
     * @return ExtCustomerInfoDTO
     */
    public function getExtCustomerInfoDTO(): ?ExtCustomerInfoDTO
    {
        return $this->extCustomerInfoDTO;
    }

    /**
     * @param ExtCustomerInfoDTO $extCustomerInfoDTO
     */
    public function setExtCustomerInfoDTO(?ExtCustomerInfoDTO $extCustomerInfoDTO): void
    {
        $this->extCustomerInfoDTO = $extCustomerInfoDTO;
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

    /**
     * @return int
     */
    public function getNodeId(): ?int
    {
        return $this->nodeId;
    }

    /**
     * @param int $nodeId
     */
    public function setNodeId(?int $nodeId): void
    {
        $this->nodeId = $nodeId;
    }

    /**
     * @return int
     */
    public function getExpiredAt(): ?int
    {
        return $this->expiredAt;
    }

    /**
     * @param int $expiredAt
     */
    public function setExpiredAt(?int $expiredAt): void
    {
        $this->expiredAt = $expiredAt;
    }

    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getBizValue(): ?string
    {
        return $this->bizValue;
    }

    /**
     * @param string $bizValue
     */
    public function setBizValue(?string $bizValue): void
    {
        $this->bizValue = $bizValue;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}