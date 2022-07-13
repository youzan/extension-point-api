<?php

namespace Com\Youzan\Cloud\Extension\Param\Account;



/**
 * 请求参数
 * @author Baymax
 * @create Mon Mar 14 16:53:16 CST 2022
 */
class ExtAccountApplyCheckRequestDTO implements \JsonSerializable {

    /**
     * 申请用户openId
     * @var string
     */
    private $yzOpenId;

    /**
     * 总部ID：若单店（hqKdtId &#x3D; kdtId）
     * @var int
     */
    private $rootKdtId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}