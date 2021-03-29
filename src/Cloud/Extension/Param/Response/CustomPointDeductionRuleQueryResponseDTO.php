<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 
 * @author Baymax
 * @create 2021-03-25 19:55:06.0
 */
class CustomPointDeductionRuleQueryResponseDTO implements \JsonSerializable {

    /**
     * 积分使用下限类型(0:不限制, 1000:用户全部积分)
     * @var int
     */
    private $useAmountLowerLimitType;

    /**
     * 抵现上限类型(0:不限制, 1000:订单金额百分比) 。        若该值为有效值（值为0或1000），表示配置了上限规则，有赞后台的上限规则将不生效 。       否则表示未配置上限规则，会取有赞后台的上限规则。
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