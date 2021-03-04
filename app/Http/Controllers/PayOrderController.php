<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;

class PayOrderController extends Controller
{
    public function __invoke(PaymentGateway $paymentGateway)
    {
        dd($paymentGateway->charge(5));
    }
}
