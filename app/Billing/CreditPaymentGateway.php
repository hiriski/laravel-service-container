<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CreditPaymentGateway implements PaymentGatewayContract
{
    private string $currency;
    private int $discount;

    public function __construct(string $currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    public function setDiscount(int $amount): void
    {
        $this->discount = $amount;
    }

    public function charge(int $amount): array
    {
        $fees = $amount * 0.03;

        return [
            'currency' => $this->currency,
            'amount' => ($amount - $this->discount) + $fees,
            'confirmation_numer' => Str::random(),
            'discount' => $this->discount,
            'fees' => $fees,
        ];
    }
}
