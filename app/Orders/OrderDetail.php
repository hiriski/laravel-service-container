<?php

namespace App\Orders;

use App\Billing\PaymentGateway;

class OrderDetail
{
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all(): array
    {
        $this->paymentGateway->setDiscount(2);

        return [
            'name' => 'Kevin Abrar Khansa',
            'address' => '123 Example Street',
        ];
    }
}
