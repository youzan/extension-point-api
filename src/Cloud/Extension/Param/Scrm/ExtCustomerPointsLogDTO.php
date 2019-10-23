<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 积分变动日志列表
 * @author Baymax
 * @create 2018-11-04 21:41:34.0
 */
class ExtCustomerPointsLogDTO implements \JsonSerializable {

    /**
     * 操作人名称
     * @var string
     */
    private $operatorName;

    /**
     * 积分变动时间
     * @var int
     */
    private $createdAt;

    /**
     * 积分变动描述
     * @var string
     */
    private $description;

    /**
     * 积分变动类型(increase/decrease)
     * @var string
     */
    private $type;

    /**
     * 积分变动值
     * @var int
     */
    private $amount;



    /**
     * @return string
     */
    public function getOperatorName(): string
    {
        return $this->operatorName;
    }

    /**
     * @param string $operatorName
     */
    public function setOperatorName(string $operatorName): void
    {
        $this->operatorName = $operatorName;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedAt(int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}