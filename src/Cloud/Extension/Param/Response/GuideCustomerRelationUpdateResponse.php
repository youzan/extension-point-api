<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 *  
 * @author Baymax
 * @create Wed Feb 22 15:11:23 CST 2023
 */
class GuideCustomerRelationUpdateResponse implements \JsonSerializable {

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