<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 11:28:58.0
 */
class ValueCardMakeCardResponse implements \JsonSerializable {

    /**
     * 生成卡号集合
     * @var array
     */
    private $cardNos;

    /**
     * 外部订单单号
     * @var string
     */
    private $extOrderNo;

    /**
     * 制卡状态：success制卡成功，fail制卡失败（会触发退款），如果超出库存或者其他校验不通过请返回制卡失败
     * @var string
     */
    private $makeSuccess;



    /**
     * @return array
     */
    public function getCardNos(): array
    {
        return $this->cardNos;
    }

    /**
     * @param array $cardNos
     */
    public function setCardNos(array $cardNos): void
    {
        $this->cardNos = $cardNos;
    }

    /**
     * @return string
     */
    public function getExtOrderNo(): string
    {
        return $this->extOrderNo;
    }

    /**
     * @param string $extOrderNo
     */
    public function setExtOrderNo(string $extOrderNo): void
    {
        $this->extOrderNo = $extOrderNo;
    }

    /**
     * @return string
     */
    public function getMakeSuccess(): string
    {
        return $this->makeSuccess;
    }

    /**
     * @param string $makeSuccess
     */
    public function setMakeSuccess(string $makeSuccess): void
    {
        $this->makeSuccess = $makeSuccess;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}