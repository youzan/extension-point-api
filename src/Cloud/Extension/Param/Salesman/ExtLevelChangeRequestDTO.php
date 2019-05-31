<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create 2019-04-12 16:17:48.0
 */
class ExtLevelChangeRequestDTO implements \JsonSerializable {

    /**
     * 分销员buyerId
     * @var int
     */
    private $buyerId;

    /**
     * 当前等级
     * @var int
     */
    private $level;

    /**
     * 累计成交订单数（发生退款不扣减)
     * @var int
     */
    private $orderNum;

    /**
     * 累计成交金额（结算前退款会扣除相应金额）
     * @var int
     */
    private $money;

    /**
     * 商品佣金（待结算+已结算）
     * @var int
     */
    private $cpsMoney;

    /**
     * 邀请奖励（待结算+已结算）
     * @var int
     */
    private $bonusMoney;

    /**
     * 累计收益(已结算订单+邀请)
     * @var int
     */
    private $profit;

    /**
     * 累计推广金
     * @var int
     */
    private $totalRecommendMoney;

    /**
     * 支付成功节点下的累计消费金
     * @var int
     */
    private $totalPayConsumeMoney;

    /**
     * 交易完成节点下的累计消费金
     * @var int
     */
    private $totalSuccessConsumeMoney;

    /**
     * 维权期结束节点下消费金
     * @var int
     */
    private $totalFinishConsumeMoney;

    /**
     * 累计客户数
     * @var int
     */
    private $totalCustomerNum;

    /**
     * 累计邀请人数
     * @var int
     */
    private $totalInviteNum;

    /**
     * 当前等级累计推广金
     * @var int
     */
    private $recommendMoney;

    /**
     * 当前等级 支付成功节点下的累计消费金
     * @var int
     */
    private $payConsumeMoney;

    /**
     * 当前等级 交易完成节点下的累计消费金
     * @var int
     */
    private $successConsumeMoney;

    /**
     * 当前等级 维权期结束节点下的累计消费金
     * @var int
     */
    private $finishConsumeMoney;

    /**
     * 当前等级累计客户数
     * @var int
     */
    private $customerNum;

    /**
     * 当前等级累计邀请人数
     * @var int
     */
    private $inviteNum;



    /**
     * @return int
     */
    public function getBuyerId(): int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return int
     */
    public function getOrderNum(): int
    {
        return $this->orderNum;
    }

    /**
     * @param int $orderNum
     */
    public function setOrderNum(int $orderNum): void
    {
        $this->orderNum = $orderNum;
    }

    /**
     * @return int
     */
    public function getMoney(): int
    {
        return $this->money;
    }

    /**
     * @param int $money
     */
    public function setMoney(int $money): void
    {
        $this->money = $money;
    }

    /**
     * @return int
     */
    public function getCpsMoney(): int
    {
        return $this->cpsMoney;
    }

    /**
     * @param int $cpsMoney
     */
    public function setCpsMoney(int $cpsMoney): void
    {
        $this->cpsMoney = $cpsMoney;
    }

    /**
     * @return int
     */
    public function getBonusMoney(): int
    {
        return $this->bonusMoney;
    }

    /**
     * @param int $bonusMoney
     */
    public function setBonusMoney(int $bonusMoney): void
    {
        $this->bonusMoney = $bonusMoney;
    }

    /**
     * @return int
     */
    public function getProfit(): int
    {
        return $this->profit;
    }

    /**
     * @param int $profit
     */
    public function setProfit(int $profit): void
    {
        $this->profit = $profit;
    }

    /**
     * @return int
     */
    public function getTotalRecommendMoney(): int
    {
        return $this->totalRecommendMoney;
    }

    /**
     * @param int $totalRecommendMoney
     */
    public function setTotalRecommendMoney(int $totalRecommendMoney): void
    {
        $this->totalRecommendMoney = $totalRecommendMoney;
    }

    /**
     * @return int
     */
    public function getTotalPayConsumeMoney(): int
    {
        return $this->totalPayConsumeMoney;
    }

    /**
     * @param int $totalPayConsumeMoney
     */
    public function setTotalPayConsumeMoney(int $totalPayConsumeMoney): void
    {
        $this->totalPayConsumeMoney = $totalPayConsumeMoney;
    }

    /**
     * @return int
     */
    public function getTotalSuccessConsumeMoney(): int
    {
        return $this->totalSuccessConsumeMoney;
    }

    /**
     * @param int $totalSuccessConsumeMoney
     */
    public function setTotalSuccessConsumeMoney(int $totalSuccessConsumeMoney): void
    {
        $this->totalSuccessConsumeMoney = $totalSuccessConsumeMoney;
    }

    /**
     * @return int
     */
    public function getTotalFinishConsumeMoney(): int
    {
        return $this->totalFinishConsumeMoney;
    }

    /**
     * @param int $totalFinishConsumeMoney
     */
    public function setTotalFinishConsumeMoney(int $totalFinishConsumeMoney): void
    {
        $this->totalFinishConsumeMoney = $totalFinishConsumeMoney;
    }

    /**
     * @return int
     */
    public function getTotalCustomerNum(): int
    {
        return $this->totalCustomerNum;
    }

    /**
     * @param int $totalCustomerNum
     */
    public function setTotalCustomerNum(int $totalCustomerNum): void
    {
        $this->totalCustomerNum = $totalCustomerNum;
    }

    /**
     * @return int
     */
    public function getTotalInviteNum(): int
    {
        return $this->totalInviteNum;
    }

    /**
     * @param int $totalInviteNum
     */
    public function setTotalInviteNum(int $totalInviteNum): void
    {
        $this->totalInviteNum = $totalInviteNum;
    }

    /**
     * @return int
     */
    public function getRecommendMoney(): int
    {
        return $this->recommendMoney;
    }

    /**
     * @param int $recommendMoney
     */
    public function setRecommendMoney(int $recommendMoney): void
    {
        $this->recommendMoney = $recommendMoney;
    }

    /**
     * @return int
     */
    public function getPayConsumeMoney(): int
    {
        return $this->payConsumeMoney;
    }

    /**
     * @param int $payConsumeMoney
     */
    public function setPayConsumeMoney(int $payConsumeMoney): void
    {
        $this->payConsumeMoney = $payConsumeMoney;
    }

    /**
     * @return int
     */
    public function getSuccessConsumeMoney(): int
    {
        return $this->successConsumeMoney;
    }

    /**
     * @param int $successConsumeMoney
     */
    public function setSuccessConsumeMoney(int $successConsumeMoney): void
    {
        $this->successConsumeMoney = $successConsumeMoney;
    }

    /**
     * @return int
     */
    public function getFinishConsumeMoney(): int
    {
        return $this->finishConsumeMoney;
    }

    /**
     * @param int $finishConsumeMoney
     */
    public function setFinishConsumeMoney(int $finishConsumeMoney): void
    {
        $this->finishConsumeMoney = $finishConsumeMoney;
    }

    /**
     * @return int
     */
    public function getCustomerNum(): int
    {
        return $this->customerNum;
    }

    /**
     * @param int $customerNum
     */
    public function setCustomerNum(int $customerNum): void
    {
        $this->customerNum = $customerNum;
    }

    /**
     * @return int
     */
    public function getInviteNum(): int
    {
        return $this->inviteNum;
    }

    /**
     * @param int $inviteNum
     */
    public function setInviteNum(int $inviteNum): void
    {
        $this->inviteNum = $inviteNum;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}