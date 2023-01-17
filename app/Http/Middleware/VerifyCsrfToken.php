<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
            'mercadopago/callback','paytm/callback','paytm-payment-plan',
            'plan-pay-with-paymentwall/*',
            '*/order-pay-with-paymentwall',
            'plan/paytm/*',
        'plan-pay-with-paytm/*'
    ];
}
