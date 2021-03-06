<?php

namespace denis909\yii;

class PayoutEvent extends \yii\base\Event
{

    public $provider;

    public $amount;

    public $currency;

    public $account;

    public $orderId;

    public $description;

    public $responseId;

    public $responseError;

    public $responseUrl;

    protected $_response;

    public function __construct(array $config = [])
    {
        parent::__construct($config);

        Assert::notEmpty($this->provider, 'Provider is empty.');

        Assert::notEmpty($this->amount, 'Amount is empty.');

        Assert::notEmpty($this->currency, 'Currency is empty.');

        Assert::notEmpty($this->account, 'Account is empty.');
    }

    public function getResponse()
    {
        return $this->_response;
    }

    public function setResponse($response)
    {
        $this->_response = $response;

        $this->responseId = null;

        $this->responseError = null;

        $this->responseUrl = null;
    }

}