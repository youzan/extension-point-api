<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\AppointmentTimeDTO;
use Com\Youzan\Cloud\Extension\Param\AddressDTO;

/**
 * 地址信息
 * @author Baymax
 * @create 2018-10-22 20:30:57.0
 */
class LogisticsDTO implements \JsonSerializable {

    /**
     * 预约时间
     * @var AppointmentTimeDTO
     */
    private $appointmentTime;

    /**
     * 物流方式
     * @var string
     */
    private $logisticsType;

    /**
     * 收货地址
     * @var AddressDTO
     */
    private $address;

    /**
     * 收货人联系方式
     * @var string
     */
    private $receiverTel;

    /**
     * 收货人信息
     * @var string
     */
    private $receiverName;



    /**
     * @return AppointmentTimeDTO
     */
    public function getAppointmentTime(): AppointmentTimeDTO
    {
        return $this->appointmentTime;
    }

    /**
     * @param AppointmentTimeDTO $appointmentTime
     */
    public function setAppointmentTime(AppointmentTimeDTO $appointmentTime): void
    {
        $this->appointmentTime = $appointmentTime;
    }

    /**
     * @return string
     */
    public function getLogisticsType(): string
    {
        return $this->logisticsType;
    }

    /**
     * @param string $logisticsType
     */
    public function setLogisticsType(string $logisticsType): void
    {
        $this->logisticsType = $logisticsType;
    }

    /**
     * @return AddressDTO
     */
    public function getAddress(): AddressDTO
    {
        return $this->address;
    }

    /**
     * @param AddressDTO $address
     */
    public function setAddress(AddressDTO $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getReceiverTel(): string
    {
        return $this->receiverTel;
    }

    /**
     * @param string $receiverTel
     */
    public function setReceiverTel(string $receiverTel): void
    {
        $this->receiverTel = $receiverTel;
    }

    /**
     * @return string
     */
    public function getReceiverName(): string
    {
        return $this->receiverName;
    }

    /**
     * @param string $receiverName
     */
    public function setReceiverName(string $receiverName): void
    {
        $this->receiverName = $receiverName;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}