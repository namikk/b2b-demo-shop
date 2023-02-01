<?php

namespace Pyz\Zed\Sales\Business\Checker;

use Pyz\Yves\CheckoutPage\Form\Steps\OrderNameForm;

class OrderNameChecker
{
    public function checkOrderName(?string $orderName): bool
    {
        return !empty($orderName) && $this->applyRegexValidation($orderName);
    }

    protected function applyRegexValidation(string $orderName): bool
    {
        return preg_match(OrderNameForm::VALIDATION_PATTERN_ORDER_NAME, $orderName);
    }
}
