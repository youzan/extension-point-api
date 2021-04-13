<?php

namespace Com\Youzan\Cloud\Extension\Param\CheckinActivityParam;



/**
 * 
 * @author Baymax
 * @create 2021-04-13 15:16:53.0
 */
class CheckInFeature implements \JsonSerializable {

    /**
     * 
     * @var array
     */
    private $name;



    /**
     * @return array
     */
    public function getName(): ?array
    {
        return $this->name;
    }

    /**
     * @param array $name
     */
    public function setName(?array $name): void
    {
        $this->name = $name;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}