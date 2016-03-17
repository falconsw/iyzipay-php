<?php

namespace Iyzipay\Model\Mapper;

use Iyzipay\Model\Cancel;

class CancelMapper extends IyzipayResourceMapper
{
    public static function create($rawResult = null)
    {
        return new CancelMapper($rawResult);
    }

    public function mapCancelFrom(Cancel $cancel, $jsonObject)
    {
        parent::mapResourceFrom($cancel, $jsonObject);

        if (isset($jsonObject->paymentId)) {
            $cancel->setPaymentId($jsonObject->paymentId);
        }
        if (isset($jsonObject->price)) {
            $cancel->setPrice($jsonObject->price);
        }
        return $cancel;
    }

    public function mapCancel(Cancel $cancel)
    {
        return $this->mapCancelFrom($cancel, $this->jsonObject);
    }
}