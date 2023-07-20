<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 *  
 * @author Baymax
 * @create Tue Mar 14 10:16:16 CST 2023
 */
class ModifyMemberResponse implements \JsonSerializable {

    /**
     * 是否成功 ture表示成功 false表示失败
     * @var bool
     */
    private $success;



    /**
     * @return bool
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess(?bool $success): void
    {
        $this->success = $success;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}