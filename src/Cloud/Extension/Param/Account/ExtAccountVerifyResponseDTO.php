<?php

namespace Com\Youzan\Cloud\Extension\Param\Account;



/**
 * 
 * @author Baymax
 * @create 2020-04-16 10:50:54.0
 */
class ExtAccountVerifyResponseDTO implements \JsonSerializable {

    /**
     * 审核结果。2：通过。3：不通过。其他状态无效
     * @var int
     */
    private $status;

    /**
     * 审核结果备注，非必填。审核不通过时可以填写不通过的原因
     * @var string
     */
    private $remark;



    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getRemark(): string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}