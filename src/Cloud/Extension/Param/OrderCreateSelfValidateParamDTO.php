<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\TradeGroupDTO;

/**
 * 
 * @author Baymax
 * @create Sun Sep 30 17:35:52 CST 2018
 */
class OrderCreateSelfValidateParamDTO implements \JsonSerializable {

    /**
     * 客户Id（有赞用户ID，在有赞平台账号平台下唯一）
     * @var string
     */
    private $userId;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * 电话号码
     * @var string
     */
    private $phoneNum;

    /**
     * 外部用户标识
     * @var string
     */
    private $outerUserId;

    /**
     * 交易分组信息
     * @var array
     */
    private $tradeGroupDTOS;

    /**
     * 有赞用户id，用户在有赞的唯一id
     * @var string
     */
    private $yzOpenId;

    /**
     * shopId，店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $nodeKdtid;



    /**
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
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
    public function getPhoneNum(): ?string
    {
        return $this->phoneNum;
    }

    /**
     * @param string $phoneNum
     */
    public function setPhoneNum(?string $phoneNum): void
    {
        $this->phoneNum = $phoneNum;
    }

    /**
     * @return string
     */
    public function getOuterUserId(): ?string
    {
        return $this->outerUserId;
    }

    /**
     * @param string $outerUserId
     */
    public function setOuterUserId(?string $outerUserId): void
    {
        $this->outerUserId = $outerUserId;
    }

    /**
     * @return array
     */
    public function getTradeGroupDTOS(): ?array
    {
        return $this->tradeGroupDTOS;
    }

    /**
     * @param array $tradeGroupDTOS
     */
    public function setTradeGroupDTOS(?array $tradeGroupDTOS): void
    {
        $this->tradeGroupDTOS = $tradeGroupDTOS;
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
    public function getNodeKdtid(): ?int
    {
        return $this->nodeKdtid;
    }

    /**
     * @param int $nodeKdtid
     */
    public function setNodeKdtid(?int $nodeKdtid): void
    {
        $this->nodeKdtid = $nodeKdtid;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}