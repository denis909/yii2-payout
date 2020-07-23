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

    protected $_result;

    public function __construct(array $config = [])
    {
        parent::__construct($config);

        Assert::notEmpty($this->provider, 'Provider is empty.');

        Assert::notEmpty($this->amount, 'Amount is empty.');

        Assert::notEmpty($this->currency, 'Currency is empty.');

        Assert::notEmpty($this->account, 'Account is empty.');
    }

    public function getResult() : PayoutResult
    {
        return $this->_result;
    }

    public function setResult(PayoutResult $result)
    {
        $this->_result = $result;
    }

}