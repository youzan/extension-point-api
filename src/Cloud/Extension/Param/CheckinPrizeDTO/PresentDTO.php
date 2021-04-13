<?php

namespace Com\Youzan\Cloud\Extension\Param\CheckinPrizeDTO;



/**
 * 
 * @author Baymax
 * @create 2021-04-13 15:16:53.0
 */
class PresentDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $presentId;

    /**
     * 
     * @var string
     */
    private $presentTitle;



    /**
     * @return int
     */
    public function getPresentId(): ?int
    {
        return $this->presentId;
    }

    /**
     * @param int $presentId
     */
    public function setPresentId(?int $presentId): void
    {
        $this->presentId = $presentId;
    }

    /**
     * @return string
     */
    public function getPresentTitle(): ?string
    {
        return $this->presentTitle;
    }

    /**
     * @param string $presentTitle
     */
    public function setPresentTitle(?string $presentTitle): void
    {
        $this->presentTitle = $presentTitle;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}