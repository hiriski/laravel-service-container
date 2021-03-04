<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetail;

class PayOrderController extends Controller
{
    public function __invoke(OrderDetail $orderDetail, PaymentGatewayContract $paymentGateway)
    {
        $orderDetail->all();

        dd($paymentGateway->charge(2500));
    }
}
