<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 20:33:40 CST 2022
 */
class CustomPointDeductionRuleQueryResponseDTO implements \JsonSerializable {

    /**
     * 积分使用下限类型(999:不限制, 1000:用户全部积分)，类型1000（用户全部积分）说明：目前有赞积分抵现的金额必须是整数元，所以这里「用户全部积分」指的是可以该用户可以抵现整数元的最大积分数。举个例子：积分使用下限类型为1000，积分兑换比例是10个积分抵1元时，用户拥有21个积分，此时该用户下单必须使用20个积分
     * @var int
     */
    private $useAmountLowerLimitType;

    /**
     * 抵现金额上限。                       抵现上限类型为1000时，deductAmountLimitVal代表百分比（有效值1~100，0表示无限制）。最终抵现金额使用这个百分比计算，结果精确到分向下取整。
     * @var int
     */
    private $deductAmountLimitType;

    /**
     * 抵现金额上限。                       抵现上限类型为1000时，deductAmountLimitVal代表百分比。最终抵现金额使用这个百分比计算，结果精确到分向下取整。
     * @var int
     */
    private $deductAmountLimitVal;



    /**
     * @return int
     */
    public function getUseAmountLowerLimitType(): ?int
    {
        return $this->useAmountLowerLimitType;
    }

    /**
     * @param int $useAmountLowerLimitType
     */
    public function setUseAmountLowerLimitType(?int $useAmountLowerLimitType): void
    {
        $this->useAmountLowerLimitType = $useAmountLowerLimitType;
    }

    /**
     * @return int
     */
    public function getDeductAmountLimitType(): ?int
    {
        return $this->deductAmountLimitType;
    }

    /**
     * @param int $deductAmountLimitType
     */
    public function setDeductAmountLimitType(?int $deductAmountLimitType): void
    {
        $this->deductAmountLimitType = $deductAmountLimitType;
    }

    /**
     * @return int
     */
    public function getDeductAmountLimitVal(): ?int
    {
        return $this->deductAmountLimitVal;
    }

    /**
     * @param int $deductAmountLimitVal
     */
    public function setDeductAmountLimitVal(?int $deductAmountLimitVal): void
    {
        $this->deductAmountLimitVal = $deductAmountLimitVal;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}