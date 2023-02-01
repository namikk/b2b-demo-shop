<?php

namespace Pyz\Zed\Sales\Business;

use Spryker\Zed\Sales\Business\SalesFacade as SprykerSalesFacade;

/**
 * @method \Pyz\Zed\Sales\Business\SalesBusinessFactory getFactory()
 */
class SalesFacade extends SprykerSalesFacade implements SalesFacadeInterface
{
    public function checkOrderName(?string $orderName): bool
    {
        return $this->getFactory()->createOrderNameChecker()->checkOrderName($orderName);
    }
}
