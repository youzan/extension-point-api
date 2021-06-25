<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 响应参数结构体
 * @author Baymax
 * @create 2018-09-29 21:13:57.0
 */
class Result implements \JsonSerializable {

    /**
     * 是否成功，true：成功，false：失败。注意！消费者下单加积分的场景下，该字段返回null或false，会导致退款时无法正常退积分，请在该场景加积分成功的情况下，务必返回data&#x3D;true
     * @var bool
     */
    private $data;



    /**
     * @return bool
     */
    public function getData(): ?bool
    {
        return $this->data;
    }

    /**
     * @param bool $data
     */
    public function setData(?bool $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}