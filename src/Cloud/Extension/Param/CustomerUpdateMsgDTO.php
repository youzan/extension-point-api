<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\CustomerUpdateDTO;

/**
 * 
 * @author Baymax
 * @create Wed Apr 24 10:11:52 CST 2019
 */
class CustomerUpdateMsgDTO implements \JsonSerializable {

    /**
     * 
     * @var CustomerUpdateDTO
     */
    private $job_data;



    /**
     * @return CustomerUpdateDTO
     */
    public function getJob_data(): CustomerUpdateDTO
    {
        return $this->job_data;
    }

    /**
     * @param CustomerUpdateDTO $job_data
     */
    public function setJob_data(CustomerUpdateDTO $job_data): void
    {
        $this->job_data = $job_data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}