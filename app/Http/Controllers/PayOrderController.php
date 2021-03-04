<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Orders\OrderDetail;

class PayOrderController extends Controller
{
    public function __invoke(OrderDetail $orderDetail, PaymentGateway $paymentGateway)
    {
        $orderDetail->all();

        dd($paymentGateway->charge(5));
    }
}
