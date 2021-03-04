<?php

namespace App\Billing;

use Illuminate\Support\Str;

class PaymentGateway
{
    private string $currency;

    public function __construct(string $currency)
    {
        $this->currency = $currency;
    }

    public function charge(int $amount): array
    {
        return [
            'currency' => $this->currency,
            'amount' => $amount,
            'confirmation_numer' => Str::random(),
        ];
    }
}
