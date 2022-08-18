<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\UnavailableItemMsgDTO;

/**
 *  
 * @author Baymax
 * @create Wed Jun 22 14:40:21 CST 2022
 */
class OrderCreateSelfValidateResultDTO implements \JsonSerializable {

    /**
     * 校验结果信息
     * @var string
     */
    private $message;

    /**
     * 校验结果
     * @var bool
     */
    private $validateResult;

    /**
     * 不可购买商品列表
     * @var array
     */
    private $unavailableItemList;



    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return bool
     */
    public function getValidateResult(): ?bool
    {
        return $this->validateResult;
    }

    /**
     * @param bool $validateResult
     */
    public function setValidateResult(?bool $validateResult): void
    {
        $this->validateResult = $validateResult;
    }

    /**
     * @return array
     */
    public function getUnavailableItemList(): ?array
    {
        return $this->unavailableItemList;
    }

    /**
     * @param array $unavailableItemList
     */
    public function setUnavailableItemList(?array $unavailableItemList): void
    {
        $this->unavailableItemList = $unavailableItemList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}