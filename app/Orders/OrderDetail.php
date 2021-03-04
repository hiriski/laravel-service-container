<?php

namespace App\Orders;

use App\Billing\PaymentGatewayContract;

class OrderDetail
{
    private $paymentGateway;

    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all(): array
    {
        $this->paymentGateway->setDiscount(200);

        return [
            'name' => 'Kevin Abrar Khansa',
            'address' => '123 Example Street',
        ];
    }
}
