<?php

namespace Pyz\Zed\Sales\Business;

use Pyz\Zed\Sales\Business\Checker\OrderNameChecker;
use Spryker\Zed\Sales\Business\SalesBusinessFactory as SprykerSalesBusinessFactory;

class SalesBusinessFactory extends SprykerSalesBusinessFactory
{

    public function createOrderNameChecker(): OrderNameChecker
    {
        return new OrderNameChecker();
    }
}
