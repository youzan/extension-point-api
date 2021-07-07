<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 
 * @author Baymax
 * @create 2018-09-29 21:13:57.0
 */
class CustomerIdentifyDTO implements \JsonSerializable {

    /**
     * 帐号类型，仅支持YouZanAccount：有赞帐号yzOpenId
     * @var string
     */
    private $accountType;

    /**
     * 有赞帐号id
     * @var string
     */
    private $accountId;

    /**
     * 连锁场景：总部kdtId；单店场景：店铺kdtId；
     * @var int
     */
    private $kdtId;

    /**
     * yzOpenId是有赞对外开放的有赞用户唯一标识，建议开发者使用
     * @var string
     */
    private $yzOpenId;

    /**
     * 触发当前请求的店铺id
     * @var int
     */
    private $nodeKdtId;



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
     * @return int
     */
    public function getNodeKdtId(): ?int
    {
        return $this->nodeKdtId;
    }

    /**
     * @param int $nodeKdtId
     */
    public function setNodeKdtId(?int $nodeKdtId): void
    {
        $this->nodeKdtId = $nodeKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}