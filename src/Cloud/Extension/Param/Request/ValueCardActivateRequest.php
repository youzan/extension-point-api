<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 10:56:31.0
 */
class ValueCardActivateRequest implements \JsonSerializable {

    /**
     * 用户有赞开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 卡号（调用方生成，取值自卡详情扩展点返回cardNo字段）
     * @var string
     */
    private $cardNo;



    /**
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return string
     */
    public function getCardNo(): string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}