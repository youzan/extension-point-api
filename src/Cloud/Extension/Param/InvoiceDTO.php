<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Java\Lang\String;

/**
 * 发票信息
 * @author Baymax
 * @create Thu Dec 08 11:03:38 CST 2022
 */
class InvoiceDTO implements \JsonSerializable {

    /**
     * 抬头类型:personal 个人,enterprise 企业
     * @var string
     */
    private $raiseType;

    /**
     * 发票抬头
     * @var string
     */
    private $userName;

    /**
     * 发票内容:itemCategory 商品类别,itemDetail 商品明细
     * @var string
     */
    private $invoiceDetailType;

    /**
     * 企业税号
     * @var string
     */
    private $taxpayerId;

    /**
     * 开票申请人收票邮箱
     * @var array
     */
    private $emailList;



    /**
     * @return string
     */
    public function getRaiseType(): ?string
    {
        return $this->raiseType;
    }

    /**
     * @param string $raiseType
     */
    public function setRaiseType(?string $raiseType): void
    {
        $this->raiseType = $raiseType;
    }

    /**
     * @return string
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(?string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getInvoiceDetailType(): ?string
    {
        return $this->invoiceDetailType;
    }

    /**
     * @param string $invoiceDetailType
     */
    public function setInvoiceDetailType(?string $invoiceDetailType): void
    {
        $this->invoiceDetailType = $invoiceDetailType;
    }

    /**
     * @return string
     */
    public function getTaxpayerId(): ?string
    {
        return $this->taxpayerId;
    }

    /**
     * @param string $taxpayerId
     */
    public function setTaxpayerId(?string $taxpayerId): void
    {
        $this->taxpayerId = $taxpayerId;
    }

    /**
     * @return array
     */
    public function getEmailList(): ?array
    {
        return $this->emailList;
    }

    /**
     * @param array $emailList
     */
    public function setEmailList(?array $emailList): void
    {
        $this->emailList = $emailList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}