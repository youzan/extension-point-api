<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 *  
 * @author Baymax
 * @create Fri Apr 22 13:12:46 CST 2022
 */
class GuideExtPointNeedInvokeResponse implements \JsonSerializable {

    /**
     *  
     * @var bool
     */
    private $result;



    /**
     * @return bool
     */
    public function getResult(): ?bool
    {
        return $this->result;
    }

    /**
     * @param bool $result
     */
    public function setResult(?bool $result): void
    {
        $this->result = $result;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}