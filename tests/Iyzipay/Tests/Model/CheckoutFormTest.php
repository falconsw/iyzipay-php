<?php

namespace Iyzipay\Tests\Model;

use Iyzipay\Model\CheckoutForm;
use Iyzipay\Request\RetrieveCheckoutFormRequest;
use Iyzipay\Tests\IyzipayResourceTestCase;

class CheckoutFormTest extends IyzipayResourceTestCase
{
    public function test_should_retrieve_checkout_form_auth()
    {
        $this->expectHttpPost();

        $checkoutFormAuth = CheckoutForm::retrieve(new RetrieveCheckoutFormRequest(), $this->options);

        $this->verifyResource($checkoutFormAuth);
    }
}