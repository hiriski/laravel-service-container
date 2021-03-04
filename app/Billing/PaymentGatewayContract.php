<?php

namespace App\Billing;

interface PaymentGatewayContract
{
    public function setDiscount(int $amount);
    public function charge(int $amount);
}
