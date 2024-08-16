<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use TsaiYiHua\ECPay\Checkout;

class CheckoutController extends Controller
{
    protected $checkout;
    
    public function __construct(Checkout $checkout)
    {
        $this->checkout = $checkout;
    }

    public function sendOrder()
    {
        $formData = [
            'UserId' => 1, // 用戶ID , Optional
            'ItemDescription' => '產品簡介',
            'ItemName' => '測試的',
            'TotalAmount' => '10000000',
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];
        return $this->checkout->setPostData($formData)->send();
    }
}