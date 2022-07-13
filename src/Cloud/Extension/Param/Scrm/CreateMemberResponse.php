<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 *  
 * @author Baymax
 * @create Thu Feb 17 20:42:44 CST 2022
 */
class CreateMemberResponse implements \JsonSerializable {

    /**
     * 是成功
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