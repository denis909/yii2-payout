<?php

namespace denis909\yii;

abstract class PayoutResult extends \yii\base\Component implements PayoutResultInterface
{

    protected $_response = [];

    public function __construct($response, array $options = [])
    {
        parent::__construct($options);

        $this->setResponse($response);
    }

    public function setResponse($response)
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