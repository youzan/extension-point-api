<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-12-14 16:04:02.0
 */
class ValueCardTradeFreezeRequest implements \JsonSerializable {

    /**
     * 有赞用户开放Id
     * @var string
     */
    private $yzOpneId;

    /**
     * 订单号（可做为幂等键）
     * @var string
     */
    private $orderNo;

    /**
     * 冻结金额
     * @var int
     */
    private $freezeAmount;

    /**
     * 冻结卡列表
     * @var array
     */
    private $cardNoList;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 总部店铺ID
     * @var int
     */
    private $rootKdtId;



    /**
     * @return string
     */
    public function getYzOpneId(): string
    {
        return $this->yzOpneId;
    }

    /**
     * @param string $yzOpneId
     */
    public function setYzOpneId(string $yzOpneId): void
    {
        $this->yzOpneId = $yzOpneId;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getFreezeAmount(): int
    {
        return $this->freezeAmount;
    }

    /**
     * @param int $freezeAmount
     */
    public function setFreezeAmount(int $freezeAmount): void
    {
        $this->freezeAmount = $freezeAmount;
    }

    /**
     * @return array
     */
    public function getCardNoList(): array
    {
        return $this->cardNoList;
    }

    /**
     * @param array $cardNoList
     */
    public function setCardNoList(array $cardNoList): void
    {
        $this->cardNoList = $cardNoList;
    }

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
     * @return int
     */
    public function getRootKdtId(): int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}