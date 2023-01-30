<?php

namespace App\Http\Controllers;

use App\Models\PaytabsInvoice;
use Basel\Paytabs\Paytabs;
use Illuminate\Http\Request;
use Paytabscom\Laravel_paytabs\Facades\paypage;


class PaytabsController extends Controller
{

    public function paytap()
    {
        $transaction_type= 'sale';
        $cart_id = '10';
        $cart_amount = '10';
        $cart_description = '10';
        $name = '10';
        $email = '10';
        $phone = '10';
        $street1 = '10';
         $city = '10';
        $state = '10';
        $country = '10';
        $zip = '10';
        $ip = '10';
        $same_as_billing = '10';
        $callback = route('paytap_home');
        $return = route('return_paytap');
        $language = 'en';
        $pay = paypage::sendPaymentCode('all')->sendTransaction($transaction_type)
        ->sendCart($cart_id, $cart_amount, $cart_description)->sendCustomerDetails($name, $email, $phone, $street1, $city, $state, $country, $zip, $ip)
        ->sendShippingDetails($same_as_billing, $name = null, $email = null, $phone = null, $street1= null, $city = null, $state = null, $country = null, $zip = null, $ip = null)->sendHideShipping($on = false)
        ->sendURLs($return, $callback)->sendLanguage($language)->sendFramed($on = false)->create_pay_page();
        return $pay;
    }

    public function paytap_home()
    {
        return 'home';
    }
    public function return_paytap()
    {
        return 'return';
    }
}
