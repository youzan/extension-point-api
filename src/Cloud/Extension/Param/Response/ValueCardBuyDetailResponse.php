<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Dto\ValueCardBuyDetailDTO;

/**
 * 响应参数
 * @author Baymax
 * @create Mon Mar 14 19:16:10 CST 2022
 */
class ValueCardBuyDetailResponse implements \JsonSerializable {

    /**
     * 详细信息
     * @var array
     */
    private $cardBuyDetails;



    /**
     * @return array
     */
    public function getCardBuyDetails(): ?array
    {
        return $this->cardBuyDetails;
    }

    /**
     * @param array $cardBuyDetails
     */
    public function setCardBuyDetails(?array $cardBuyDetails): void
    {
        $this->cardBuyDetails = $cardBuyDetails;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}