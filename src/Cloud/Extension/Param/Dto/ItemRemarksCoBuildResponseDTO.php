<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Dto\ItemRemarkDTO;

/**
 * 接口出参
 * @author Baymax
 * @create Fri Oct 25 17:27:56 CST 2024
 */
class ItemRemarksCoBuildResponseDTO implements \JsonSerializable {

    /**
     * 商品备注列表
     * @var array
     */
    private $itemRemarks;



    /**
     * @return array
     */
    public function getItemRemarks(): ?array
    {
        return $this->itemRemarks;
    }

    /**
     * @param array $itemRemarks
     */
    public function setItemRemarks(?array $itemRemarks): void
    {
        $this->itemRemarks = $itemRemarks;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}