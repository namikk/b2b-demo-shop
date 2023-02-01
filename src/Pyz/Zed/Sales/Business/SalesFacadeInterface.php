<?php

namespace Pyz\Zed\Sales\Business;

use Spryker\Zed\Sales\Business\SalesFacadeInterface as SprykerSalesFacadeInterface;

interface SalesFacadeInterface extends SprykerSalesFacadeInterface
{
    public function checkOrderName(string $orderName): bool;
}
