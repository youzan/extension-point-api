<?php

namespace Com\Youzan\Cloud\Extension\Param\Account;



/**
 * 待审核的分销员信息列表
 * @author Baymax
 * @create 2020-04-16 10:50:54.0
 */
class ExtAccountVerifyDTO implements \JsonSerializable {

    /**
     * 分销员所在店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 分销员openId
     * @var string
     */
    private $dsOpenId;

    /**
     * 邀请方openId，分销员可能没有邀请方，可能为空
     * @var string
     */
    private $fromDsOpenId;



    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getDsOpenId(): string
    {
        return $this->dsOpenId;
    }

    /**
     * @param string $dsOpenId
     */
    public function setDsOpenId(string $dsOpenId): void
    {
        $this->dsOpenId = $dsOpenId;
    }

    /**
     * @return string
     */
    public function getFromDsOpenId(): string
    {
        return $this->fromDsOpenId;
    }

    /**
     * @param string $fromDsOpenId
     */
    public function setFromDsOpenId(string $fromDsOpenId): void
    {
        $this->fromDsOpenId = $fromDsOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}