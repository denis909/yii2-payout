<?php

namespace denis909\yii;

abstract class PayoutResult implements PayoutResultInterface
{

    protected $_resonse = [];

    public function __construct(array $response = [])
    {
        $this->setResponse($response);
    }

    public function setResponse(array $response)
    {
        $this->_response = $response;
    }

    public function getResponse() : array
    {
        return $this->_response;
    }

    abstract function getIsSuccess() : bool;

    abstract function getError();

    abstract function getRedirectUrl();

    abstract function getPaymentId();

}