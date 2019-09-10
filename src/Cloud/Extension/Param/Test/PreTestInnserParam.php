<?php

namespace Com\Youzan\Cloud\Extension\Param\Test;

use Com\Youzan\Cloud\Extension\Param\Test\PreTestSubParamDTO;

/**
 * 
 * @author Baymax
 * @create 2019-09-10 17:00:22.0
 */
class PreTestInnserParam implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $name;

    /**
     * 
     * @var string
     */
    private $value;

    /**
     * 
     * @var PreTestSubParamDTO
     */
    private $sub;



    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return PreTestSubParamDTO
     */
    public function getSub(): PreTestSubParamDTO
    {
        return $this->sub;
    }

    /**
     * @param PreTestSubParamDTO $sub
     */
    public function setSub(PreTestSubParamDTO $sub): void
    {
        $this->sub = $sub;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}