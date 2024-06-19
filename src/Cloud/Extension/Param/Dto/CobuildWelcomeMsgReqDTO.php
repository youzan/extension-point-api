<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 请求参数
 * @author Baymax
 * @create Mon Jun 17 16:31:50 CST 2024
 */
class CobuildWelcomeMsgReqDTO implements \JsonSerializable {

    /**
     * 企助店铺ID
     * @var int
     */
    private $wecomKdtId;

    /**
     * 企微助手的员工ID
     * @var int
     */
    private $staffId;

    /**
     * 企业微信的客户ID
     * @var string
     */
    private $externalUserId;

    /**
     * 欢迎语code，有效期20s
     * @var string
     */
    private $welcomeCode;

    /**
     * 企业自定义的state参数，用于区分不同的添加渠道，在调用“获取外部联系人详情”时会返回该参数值，不超过30个字符
     * @var string
     */
    private $addState;

    /**
     * 添加时间，Unix时间戳，单位:秒
     * @var int
     */
    private $createTime;



    /**
     * @return int
     */
    public function getWecomKdtId(): ?int
    {
        return $this->wecomKdtId;
    }

    /**
     * @param int $wecomKdtId
     */
    public function setWecomKdtId(?int $wecomKdtId): void
    {
        $this->wecomKdtId = $wecomKdtId;
    }

    /**
     * @return int
     */
    public function getStaffId(): ?int
    {
        return $this->staffId;
    }

    /**
     * @param int $staffId
     */
    public function setStaffId(?int $staffId): void
    {
        $this->staffId = $staffId;
    }

    /**
     * @return string
     */
    public function getExternalUserId(): ?string
    {
        return $this->externalUserId;
    }

    /**
     * @param string $externalUserId
     */
    public function setExternalUserId(?string $externalUserId): void
    {
        $this->externalUserId = $externalUserId;
    }

    /**
     * @return string
     */
    public function getWelcomeCode(): ?string
    {
        return $this->welcomeCode;
    }

    /**
     * @param string $welcomeCode
     */
    public function setWelcomeCode(?string $welcomeCode): void
    {
        $this->welcomeCode = $welcomeCode;
    }

    /**
     * @return string
     */
    public function getAddState(): ?string
    {
        return $this->addState;
    }

    /**
     * @param string $addState
     */
    public function setAddState(?string $addState): void
    {
        $this->addState = $addState;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(?int $createTime): void
    {
        $this->createTime = $createTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}