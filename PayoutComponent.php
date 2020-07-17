<?php

namespace denis909\yii;

class PayoutComponent extends \yii\base\Component
{

    const EVENT_PAYOUT = 'payout';

    public function payout(PayoutEvent $event)
    {
        return $this->trigger(static::EVENT_PAYOUT, $event);
    }

    public function onPayout($callback)
    {
        $this->on(static::EVENT_PAYOUT, $callback);
    }

}