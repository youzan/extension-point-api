<?php

namespace Com\Youzan\Cloud\Extension\Param;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2019-08-05 19:51:35.0
 */
class PointsMessageDTO implements \JsonSerializable {

    /**
     * 消息体
     * @var string
     */
    private $job_data;

    /**
     * 时间
     * @var int
     */
    private $job_time;



    /**
     * @return string
     */
    public function getJob_data(): string
    {
        return $this->job_data;
    }

    /**
     * @param string $job_data
     */
    public function setJob_data(string $job_data): void
    {
        $this->job_data = $job_data;
    }

    /**
     * @return int
     */
    public function getJob_time(): int
    {
        return $this->job_time;
    }

    /**
     * @param int $job_time
     */
    public function setJob_time(int $job_time): void
    {
        $this->job_time = $job_time;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}